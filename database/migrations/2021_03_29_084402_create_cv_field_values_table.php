<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvFieldValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_field_values', function (Blueprint $table) {
            $table->id();
            $table->string('type');//we need to change it to a set that user can choose form them.
            $table->unsignedBigInteger('field_id');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->string('value');
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
        Schema::dropIfExists('cv_field_values');
    }
}
