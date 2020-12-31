<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Period;
use App\Day;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Period::class, function (Faker $faker) {
    return [
        'student_id'=>function(){
            return Student::all()->random();
       },

       'day_id'=>function(){
        return Day::all()->random();
   },

        'name'=>$faker->name,

    ];
});
