<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_template_id');
            $table->date('date_info');
            $table->unsignedBigInteger('use_count');
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
        Schema::dropIfExists('template_statistics');
    }
}
