<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use App\Models\UserBootcampProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CertificateController extends Controller
{
    /**
     * Menghitung ukuran font optimal untuk teks
     */
    private function calculateOptimalFontSize($text, $maxWidth, $referenceSize, $minSize = 10)
    {
        $currentSize = $referenceSize;
        $textWidth = 0;

        do {
            $currentSize--;
            $textWidth = $this->estimateTextWidth($text, $currentSize);
        } while ($textWidth > $maxWidth && $currentSize > $minSize);

        return $currentSize;
    }

    /**
     * Memperkirakan lebar teks berdasarkan ukuran font
     */
    private function estimateTextWidth($text, $fontSize)
    {
        return strlen($text) * $fontSize * 0.6;
    }

    /**
     * Mendapatkan font paling tebal yang tersedia
     */
    private function getBoldestAvailableFont()
    {
        $fontPriorityList = [
            'Montserrat-Black.otf',
            'Montserrat-ExtraBold.otf',
            'Montserrat-Bold.otf',
            'Arial-Bold.otf',
            'Impact.otf'
        ];

        foreach ($fontPriorityList as $font) {
            $fontPath = public_path('fonts/' . $font);
            if (File::exists($fontPath)) {
                return $fontPath;
            }
        }

        return null;
    }

    /**
     * Claim certificate endpoint
     */
    public function claim(Request $request, $bootcampId)
    {
        if (!Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'Silakan login untuk mengklaim sertifikat'
            ], 401);
        }

        $user = Auth::user();
        $progress = UserBootcampProgress::where('user_id', $user->id)
            ->where('bootcamp_id', $bootcampId)
            ->first();

        if (!$progress || $progress->progress_percentage < 100) {
            return response()->json([
                'success' => false,
                'message' => 'Anda harus menyelesaikan kursus terlebih dahulu'
            ], 403);
        }

        if ($progress->certificate_claimed) {
            return response()->json([
                'success' => false,
                'message' => 'Sertifikat ini sudah pernah diklaim'
            ], 400);
        }

        try {
            $progress->certificate_claimed = true;
            $progress->save();

            // Validasi dan load template
            $templatePath = public_path('certificates/1.png');
            if (!File::exists($templatePath)) {
                throw new \Exception("Template sertifikat tidak ditemukan di: " . $templatePath);
            }

            $image = Image::make($templatePath);
            $imageWidth = $image->width();
            $imageHeight = $image->height();

            // ===== KONFIGURASI TEKS ===== //
            $userName = mb_strtoupper($user->name);

            // Konfigurasi font dari request atau default
            $fontConfig = [
                'size' => $request->input('font_size', 72), // Default 72px
                'color' => $request->input('font_color', '#e67e22'), // Dark blue/gray
                'y_position' => 0.47 // 42% dari atas
            ];

            // Validasi ukuran font
            $fontConfig['size'] = max(10, min(150, $fontConfig['size']));

            // Dapatkan font
            $fontPath = $this->getBoldestAvailableFont();
            if (!$fontPath) {
                Log::warning('Font tebal tidak ditemukan, menggunakan font default');
            }

            // Posisi teks
            $textX = $imageWidth / 2;
            $textY = $imageHeight * $fontConfig['y_position'];

            // Gambar teks dengan efek shadow halus
            if ($fontPath) {
                // Shadow
                $image->text($userName, $textX + 2, $textY + 2, function ($font) use ($fontPath, $fontConfig) {
                    $font->file($fontPath);
                    $font->size($fontConfig['size']);
                    $font->color('rgba(0,0,0,0.15)');
                    $font->align('center');
                    $font->valign('top');
                });

                // Teks utama
                $image->text($userName, $textX, $textY, function ($font) use ($fontPath, $fontConfig) {
                    $font->file($fontPath);
                    $font->size($fontConfig['size']);
                    $font->color($fontConfig['color']);
                    $font->align('center');
                    $font->valign('top');
                });
            } else {
                // Fallback tanpa font custom
                $image->text($userName, $textX, $textY, function ($font) use ($fontConfig) {
                    $font->size($fontConfig['size']);
                    $font->color($fontConfig['color']);
                    $font->align('center');
                    $font->valign('top');
                });
            }

            // ===== SIMPAN SERTIFIKAT ===== //
            $certificatesDir = public_path('certificates');
            if (!File::exists($certificatesDir)) {
                File::makeDirectory($certificatesDir, 0755, true);
            }

            $filename = 'certificate_' . $user->id . '_' . $bootcampId . '_' . time() . '.png';
            $savePath = $certificatesDir . '/' . $filename;

            // Simpan dengan kualitas 95%
            if (!$image->save($savePath, 95)) {
                throw new \Exception("Gagal menyimpan gambar sertifikat");
            }

            // Simpan ke storage
            Storage::disk('public')->put('certificates/' . $filename, file_get_contents($savePath));

            return response()->json([
                'success' => true,
                'certificate_url' => asset('storage/certificates/' . $filename),
                'message' => 'Sertifikat berhasil dibuat',
                'font_settings' => $fontConfig,
                'text_position' => [
                    'x' => $textX,
                    'y' => $textY,
                    'percentage' => $fontConfig['y_position'] * 100
                ]
            ]);

        } catch (\Exception $e) {
            $progress->certificate_claimed = false;
            $progress->save();

            Log::error('Certificate Generation Error', [
                'user_id' => $user->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Gagal membuat sertifikat: ' . $e->getMessage()
            ], 500);
        }
    }
}
