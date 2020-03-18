<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->integer('category_id');            
            $table->string('name');
            $table->string('info');
            $table->string('composition');
            $table->string('recipe');
            $table->integer('kcal');
            $table->integer('protein');
            $table->integer('fat');
            $table->integer('carbohydrate');
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
        Schema::dropIfExists('dishes');
    }
}
