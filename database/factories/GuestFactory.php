<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guest;
use Faker\Generator as Faker;

$factory->define(Guest::class, function (Faker $faker) {
    return [
        //
    "title" => $faker->text(5) , 
    "first_name" => $faker->text(5) , 
    "last_name" => $faker->text(5) , 
    "gender" => $faker->text(5) , 
    ];
});
