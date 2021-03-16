<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('legends', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->integer('first_weapon_id');
            $table->integer('second_weapon_id');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('defense');
            $table->integer('speed');
            $table->integer('price');
            $table->boolean('new');
            $table->timestamps();

            $table->foreign('first_weapon_id')->references('id')->on('weapons');
            $table->foreign('second_weapon_id')->references('id')->on('weapons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legends');
        Schema::dropIfExists('weapons');
    }
}
