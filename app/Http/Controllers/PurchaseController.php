<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    // Method untuk mencatat pembelian
    public function purchase(Request $request)
    {
        // Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return response()->json([
                'status' => 'error',
                'message' => 'You must be logged in to make a purchase.',
            ], 401); // 401 Unauthorized
        }

        $user = Auth::user(); // Ambil data pengguna yang sedang login
        $bootcampId = $request->input('bootcamp_id');

        // Simpan data pembelian ke database
        $purchase = Purchase::create([
            'user_id' => $user->id,
            'bootcamp_id' => $bootcampId,
            'payment_status' => 'success', // Default status
            'snap_token' => $request->input('snap_token'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Purchase recorded successfully',
            'data' => $purchase,
        ]);
    }

    // Method untuk mengecek status pembayaran
    public function checkPaymentStatus(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => 'error',
                'message' => 'You must be logged in to check payment status.',
            ], 401); // 401 Unauthorized
        }

        $user = Auth::user();
        $bootcampId = $request->input('bootcamp_id');

        // Cek apakah ada pembelian dengan status 'success'
        $purchase = Purchase::where('user_id', $user->id)
            ->where('bootcamp_id', $bootcampId)
            ->where('payment_status', 'success')
            ->first();

        if ($purchase) {
            return response()->json([
                'status' => 'success',
                'message' => 'Payment already completed.',
                'data' => $purchase,
            ]);
        }

        return response()->json([
            'status' => 'pending',
            'message' => 'Payment not completed yet.',
        ]);
    }
}