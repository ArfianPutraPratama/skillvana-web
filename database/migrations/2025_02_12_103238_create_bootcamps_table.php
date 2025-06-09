<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bootcamps', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('duration');
            $table->integer('students')->default(0);
            $table->decimal('original_price', 10, 2);
            $table->decimal('discounted_price', 10, 2);
            $table->string('image')->nullable(); // Kolom untuk gambar
            // Kolom tambahan dari migrasi kedua
            $table->date('start_date');
            $table->integer('lectures')->default(0);
            $table->string('skill_level')->nullable();
            $table->string('language')->nullable();
            $table->integer('quizzes')->default(0);
            $table->boolean('certificate')->default(false);
            $table->integer('pass_percentage')->default(0);
            $table->date('deadline')->nullable();
            $table->string('instructor');
            $table->text('description');
            $table->text('learnings')->nullable();
            $table->text('certification_info')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bootcamps');
    }
};
