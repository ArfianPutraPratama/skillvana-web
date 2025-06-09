<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use App\Models\UserBootcampProgress;
use App\Models\Video;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class BootcampController extends Controller
{
    public function index()
    {
        try {
            $categories = $this->getBootcampCategories();
            $bootcampsByCategory = [];

            foreach ($categories as $key => $name) {
                $bootcampsByCategory[$key] = Bootcamp::query()
                    ->where('category', $key)
                    ->with([
                        'modules' => function ($query) {
                            $query->withCount('videos');
                        }
                    ])
                    ->withCount('modules')
                    ->orderBy('start_date', 'desc')
                    ->take(10) // Limit to 10 bootcamps per category
                    // ->paginate(10) // Optional: Enable pagination if needed
                    ->get();
            }

            return view('bootcamp', [
                'bootcampsByCategory' => $bootcampsByCategory,
                'categories' => $categories
            ]);
        } catch (\Exception $e) {
            Log::error('Bootcamp index error: ' . $e->getMessage(), ['exception' => $e]);
            return view('bootcamp', [
                'bootcampsByCategory' => [],
                'categories' => $this->getBootcampCategories(),
                'error' => 'Failed to load bootcamps. Please try again later.'
            ]);
        }
    }

    public function show($id)
    {
        try {
            $bootcamp = Bootcamp::with(['modules.videos'])->findOrFail($id);
            $bootcamp->start_date = Carbon::parse($bootcamp->start_date);

            return view('bootcamp-deskripsi', [
                'bootcamp' => $bootcamp,
                'instructor_name' => $bootcamp->instructor // Fixed from instructor_name
            ]);
        } catch (\Exception $e) {
            Log::error('Bootcamp show error: ' . $e->getMessage(), ['id' => $id, 'exception' => $e]);
            return redirect()->route('bootcamp.index')
                ->with('error', 'Bootcamp not found');
        }
    }

    public function detail($id)
    {
        try {
            $bootcamp = Bootcamp::with(['modules.videos'])->findOrFail($id);

            $userProgress = null;
            if (Auth::check()) {
                $userProgress = UserBootcampProgress::firstOrCreate(
                    [
                        'user_id' => Auth::id(),
                        'bootcamp_id' => $id
                    ],
                    [
                        'watched_videos' => json_encode([]),
                        'progress_percentage' => 0,
                        'last_watched_at' => now()
                    ]
                );
                $userProgress->watched_videos = $this->normalizeWatchedVideos($userProgress->watched_videos);
            } else {
                // Fallback for unauthenticated users
                return view('bootcamp-detail', [
                    'bootcamp' => $bootcamp,
                    'userProgress' => null,
                    'error' => 'Please log in to track your progress.'
                ]);
            }

            return view('bootcamp-detail', [
                'bootcamp' => $bootcamp,
                'userProgress' => $userProgress
            ]);
        } catch (\Exception $e) {
            Log::error('Bootcamp detail error: ' . $e->getMessage(), ['id' => $id, 'exception' => $e]);
            return redirect()->route('bootcamp.index')
                ->with('error', 'Failed to load bootcamp details');
        }
    }

    public function getProgress($bootcampId)
    {
        if (!Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated'
            ], 401);
        }

        try {
            $progress = UserBootcampProgress::firstOrCreate(
                [
                    'user_id' => Auth::id(),
                    'bootcamp_id' => $bootcampId
                ],
                [
                    'watched_videos' => json_encode([]),
                    'progress_percentage' => 0,
                    'last_watched_at' => now()
                ]
            );

            return response()->json([
                'success' => true,
                'progress' => [
                    'watched_videos' => $this->normalizeWatchedVideos($progress->watched_videos),
                    'progress_percentage' => $progress->progress_percentage,
                    'last_watched_at' => $progress->last_watched_at,
                    'certificate_claimed' => $progress->certificate_claimed
                ]
            ]);
        } catch (\Exception $e) {
            Log::error('Get progress failed: ' . $e->getMessage(), ['bootcamp_id' => $bootcampId, 'exception' => $e]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to get progress',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    public function saveProgress(Request $request, $bootcampId)
    {
        // Enhanced CSRF validation: Check header or form input
        $csrfToken = $request->header('X-CSRF-TOKEN') ?? $request->input('_token');
        if ($csrfToken !== csrf_token()) {
            Log::error('CSRF Token Mismatch', [
                'expected' => csrf_token(),
                'received' => $csrfToken
            ]);
            return response()->json([
                'success' => false,
                'message' => 'CSRF token mismatch',
                'new_csrf_token' => csrf_token()
            ], 419);
        }

        $validator = Validator::make($request->all(), [
            'watched_videos' => 'required|array',
            'watched_videos.*' => 'string',
            'progress_percentage' => 'required|numeric|min:0|max:100',
            'certificate_claimed' => 'sometimes|boolean'
        ]);

        if ($validator->fails()) {
            Log::error('Validation failed:', ['errors' => $validator->errors()->toArray()]);
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        if (!Auth::check()) {
            Log::warning('Unauthenticated progress save attempt', ['bootcamp_id' => $bootcampId]);
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated'
            ], 401);
        }

        DB::beginTransaction();
        try {
            $existingProgress = UserBootcampProgress::where('user_id', Auth::id())
                ->where('bootcamp_id', $bootcampId)
                ->first();

            if (
                $existingProgress &&
                $existingProgress->progress_percentage >= 100 &&
                (!$request->has('certificate_claimed') || !$request->certificate_claimed)
            ) {
                DB::commit();
                return response()->json([
                    'success' => true,
                    'progress' => [
                        'watched_videos' => $this->normalizeWatchedVideos($existingProgress->watched_videos),
                        'progress_percentage' => $existingProgress->progress_percentage
                    ]
                ]);
            }

            $updateData = [
                'watched_videos' => json_encode($request->watched_videos),
                'progress_percentage' => $request->progress_percentage,
                'last_watched_at' => now()
            ];

            if ($request->has('certificate_claimed')) {
                $updateData['certificate_claimed'] = $request->certificate_claimed;
            }

            $progress = UserBootcampProgress::updateOrCreate(
                [
                    'user_id' => Auth::id(),
                    'bootcamp_id' => $bootcampId
                ],
                $updateData
            );

            DB::commit();

            Log::info('Progress saved successfully', [
                'user_id' => Auth::id(),
                'bootcamp_id' => $bootcampId,
                'progress' => $progress
            ]);

            return response()->json([
                'success' => true,
                'progress' => [
                    'watched_videos' => $this->normalizeWatchedVideos($progress->watched_videos),
                    'progress_percentage' => $progress->progress_percentage,
                    'certificate_claimed' => $progress->certificate_claimed
                ]
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Progress save error: ' . $e->getMessage(), ['bootcamp_id' => $bootcampId, 'exception' => $e]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to save progress',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    protected function normalizeWatchedVideos($watchedVideos)
    {
        if (is_array($watchedVideos)) {
            return $watchedVideos;
        }

        if (is_string($watchedVideos)) {
            return json_decode($watchedVideos, true) ?? [];
        }

        return [];
    }

    protected function generateCertificate($user, $bootcampId)
    {
        return route('certificate.download', [
            'user' => $user->id,
            'bootcamp' => $bootcampId,
            'token' => \Illuminate\Support\Str::random(40)
        ]);
    }

    protected function getTotalVideos($bootcampId)
    {
        return Video::whereHas('module', function ($query) use ($bootcampId) {
            $query->where('bootcamp_id', $bootcampId);
        })->count();
    }

    protected function getBootcampCategories()
    {
        return [
            'chatgpt' => 'ChatGPT',
            'data-science' => 'Data Science',
            'python' => 'Python',
            'machine-learning' => 'Machine Learning',
            'deep-learning' => 'Deep Learning',
            'ai' => 'Artificial Intelligence (AI)',
            'statistics' => 'Statistics',
            'nlp' => 'Natural Language Processing'
        ];
    }
}
