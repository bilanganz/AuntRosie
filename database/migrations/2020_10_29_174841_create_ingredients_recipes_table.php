<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingredients_id');
            $table->unsignedBigInteger('recipes_id');
            $table->bigInteger('amount')->default('0');
            $table->foreign('ingredients_id')->references('id')->on('ingredients');
            $table->foreign('recipes_id')->references('id')->on('recipes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients_recipes');
    }
}
