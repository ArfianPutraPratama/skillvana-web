<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index()
    {
        try {
            $seminars = Seminar::all(); // Fetch all seminars from the database
            if ($seminars === null) {
                throw new \Exception("Failed to fetch seminars from the database.");
            }
            return view('seminar', compact('seminars'));
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Error fetching seminars: ' . $e->getMessage());
            // Pass an empty collection to the view to avoid the undefined variable error
            $seminars = collect([]);
            return view('seminar', compact('seminars'))->with('error', 'Unable to load seminars. Please try again later.');
        }
    }

    public function show($id)
    {
        $seminar = Seminar::findOrFail($id);
        return view('seminar-detail', compact('seminar'));
    }
}
