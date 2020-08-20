<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Laptop;
use Faker\Generator as Faker;

$factory->define(Laptop::class, function (Faker $faker) {
    return [
        //
    
        'brand' => $faker->name() , 
        'model' => $faker->name() , 
        'serial_number' => $faker->name() ,
        'serial_location' => $faker->name() ,
        'color' => $faker->name() ,
        'status' => $faker->name(),
        
        
    ];
});
