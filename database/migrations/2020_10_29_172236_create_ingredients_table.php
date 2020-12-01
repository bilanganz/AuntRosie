<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medical_condition_id')->nullable();
            $table->unsignedBigInteger('nutritions_id');
            $table->string('name');
            $table->string('description');
            $table->bigInteger('shelf_life');
            $table->foreign('medical_condition_id')->references('id')->on('medical_conditions');
            $table->foreign('nutritions_id')->references('id')->on('nutritions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
