<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_id');
            $table->date('date_info');
            $table->unsignedBigInteger('view_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_statistics');
    }
}
