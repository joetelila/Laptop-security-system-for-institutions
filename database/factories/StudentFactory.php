<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [    
        //
    "student_id" => $faker->name() , 
    "first_name" => $faker->name() , 
    "last_name" => $faker->name() , 
    "department" => $faker->name() , 
    "year_joined" => $faker->name() , 
    "currently" => $faker->name() , 
    "gender" => $faker->name() ,     
    ];
});
