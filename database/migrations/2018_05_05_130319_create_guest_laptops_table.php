<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->string("Title");
            $table->string("Fname");
            $table->string("Lname");
            $table->string("Gender");
            $table->string("brand");
            $table->string("model");
            $table->string("ser_number")->unique();
            $table->string("ser_loc");
            $table->string("color");
            $table->string("status");
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
        Schema::drop('guest_laptops');
    }
}
