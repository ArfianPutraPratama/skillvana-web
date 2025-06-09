<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('user_bootcamp_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('bootcamp_id');

            // Untuk MySQL versi lama, gunakan TEXT sebagai ganti JSON
            $table->text('watched_videos')->nullable();

            // Hilangkan comment() untuk kompatibilitas
            $table->integer('progress_percentage')
                ->default(0)
                ->unsigned();

            $table->timestamp('last_watched_at')->nullable();
            $table->boolean('certificate_claimed')->default(false); // New column for certificate claim status
            $table->timestamps();

            // Tetap pertahankan index untuk performa
            $table->index('user_id');
            $table->index('bootcamp_id');
            $table->index('progress_percentage');
            $table->index('last_watched_at');

            // Foreign key constraints
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('bootcamp_id')
                ->references('id')
                ->on('bootcamps')
                ->onDelete('cascade');

            $table->unique(['user_id', 'bootcamp_id']);
        });

    }

    public function down()
    {
        Schema::table('user_bootcamp_progress', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['bootcamp_id']);
        });

        Schema::dropIfExists('user_bootcamp_progress');
    }
};