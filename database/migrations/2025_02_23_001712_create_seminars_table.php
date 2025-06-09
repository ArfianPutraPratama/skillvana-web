<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('instructor');
            $table->text('description');
            $table->decimal('rating', 3, 1);
            $table->integer('review_count');
            $table->decimal('price', 10, 2);
            $table->decimal('discounted_price', 10, 2);
            $table->string('image')->nullable();
            $table->string('image2')->nullable(); // Hapus 'after' jika tidak diperlukan
            $table->timestamps();
            $table->date('start_date');
            $table->integer('students')->default(0);
            $table->integer('lectures')->default(0);
            $table->string('skill_level')->nullable();
            $table->string('language')->nullable();
            $table->integer('quizzes')->default(0);
            $table->boolean('certificate')->default(false);
            $table->integer('pass_percentage')->default(0);
            $table->date('deadline')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('seminars');
    }
};