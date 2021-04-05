<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_id');
            $table->string('title');
            $table->string('type');//we need to change this to a set that user can choose from.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_fields');
    }
}
