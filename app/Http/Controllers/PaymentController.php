<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bootcamp; // Pastikan model Bootcamp sudah di-import

class PaymentController extends Controller
{
    public function getSnapToken(Request $request)
    {
        // Pastikan user sudah login
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        // Ambil data bootcamp berdasarkan bootcamp_id yang dikirim dari frontend
        $bootcamp = Bootcamp::find($request->bootcamp_id);
        if (!$bootcamp) {
            return response()->json(['error' => 'Bootcamp not found'], 404);
        }

        // Siapkan parameter untuk Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => uniqid(), // Generate unique order ID
                'gross_amount' => $bootcamp->discounted_price, // Gunakan harga diskon
            ],
            'customer_details' => [
                'first_name' => $user->name, // Ambil nama user dari database
                'email' => $user->email, // Ambil email user dari database
                'phone' => $user->phone ?? '', // Jika ada nomor telepon di database, gunakan itu
            ],
            'item_details' => [
                [
                    'id' => $bootcamp->id,
                    'price' => $bootcamp->discounted_price,
                    'quantity' => 1,
                    'name' => $bootcamp->title, // Gunakan judul bootcamp
                ]
            ],
        ];

        try {
            // Generate Snap Token
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}