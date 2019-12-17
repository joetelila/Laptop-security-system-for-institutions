<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAstustudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('astustuds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('User_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dept');
            $table->string('year_joined');
            $table->string('currently');
            $table->string('gender');
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
        Schema::drop('astustuds');
    }
}
