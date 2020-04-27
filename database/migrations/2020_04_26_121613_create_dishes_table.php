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
            $table->string('image');
            $table->string('list1');
            $table->string('list2');
            $table->string('list3');
            $table->string('list4');
            $table->string('list5');
            $table->string('list6');
            $table->string('list7');
            $table->string('list8');
            $table->string('list9');
            $table->string('list10');
            $table->string('list11');
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
