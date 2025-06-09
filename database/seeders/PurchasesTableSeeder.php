<?php

namespace Database\Seeders;

use App\Models\Purchase;
use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    public function run()
    {
        // Data dummy untuk tabel purchases
        Purchase::create([
            'user_id' => 1, // ID pengguna dummy
            'bootcamp_id' => 1, // ID bootcamp dummy
            'payment_status' => 'success',
            'snap_token' => 'dummy_snap_token_123',
        ]);

        Purchase::create([
            'user_id' => 2, // ID pengguna dummy
            'bootcamp_id' => 2, // ID bootcamp dummy
            'payment_status' => 'pending',
            'snap_token' => 'dummy_snap_token_456',
        ]);
    }
}