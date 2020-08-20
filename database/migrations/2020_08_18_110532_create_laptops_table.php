<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('serial_number');
            $table->string('serial_location');
            $table->string('color');
            $table->string('status');
            $table->unsignedBigInteger('laptopable_id');
            $table->string('laptopable_type');
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
        Schema::dropIfExists('laptops');
    }
}
