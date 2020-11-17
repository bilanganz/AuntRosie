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
        Schema::create('nutritions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('calories')->default('0');
            $table->bigInteger('fat')->default('0');
            $table->bigInteger('saturated_fat')->default('0');
            $table->bigInteger('trans_fat')->default('0');
            $table->bigInteger('cholestrol')->default('0');
            $table->bigInteger('sodium')->default('0');
            $table->bigInteger('carbohydrate')->default('0');
            $table->bigInteger('dietary_fiber')->default('0');
            $table->bigInteger('sugar')->default('0');
            $table->bigInteger('protein')->default('0');
            $table->bigInteger('vitamin_d')->default('0');
            $table->bigInteger('calcium')->default('0');
            $table->bigInteger('iron')->default('0');
            $table->bigInteger('potassium')->default('0');
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
