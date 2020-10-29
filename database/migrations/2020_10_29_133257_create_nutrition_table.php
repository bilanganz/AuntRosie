<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('calories');
            $table->bigInteger('fat');
            $table->bigInteger('saturatedFat');
            $table->bigInteger('transFat');
            $table->bigInteger('cholestrol');
            $table->bigInteger('sodium');
            $table->bigInteger('carbohydrate');
            $table->bigInteger('dietaryFiber');
            $table->bigInteger('sugar');
            $table->bigInteger('protein');
            $table->bigInteger('vitaminD');
            $table->bigInteger('calcium');
            $table->bigInteger('iron');
            $table->bigInteger('potassium');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrition');
    }
}
