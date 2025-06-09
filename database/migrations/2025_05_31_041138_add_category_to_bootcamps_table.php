<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToBootcampsTable extends Migration
{
    public function up()
    {
        Schema::table('bootcamps', function (Blueprint $table) {
            $table->string('category')->nullable()->after('description');
        });
    }

    public function down()
    {
        Schema::table('bootcamps', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
}
