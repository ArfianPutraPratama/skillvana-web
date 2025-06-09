<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis (primary key)
            $table->unsignedBigInteger('user_id'); // Kolom user_id (foreign key ke tabel users)
            $table->unsignedBigInteger('bootcamp_id'); // Kolom bootcamp_id (foreign key ke tabel bootcamps)
            $table->enum('payment_status', ['pending', 'success', 'failed'])->default('pending'); // Status pembayaran
            $table->string('snap_token')->nullable(); // Token Snap dari Midtrans
            $table->timestamps(); // Kolom created_at dan updated_at

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bootcamp_id')->references('id')->on('bootcamps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
