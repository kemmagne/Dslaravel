<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Week;
use App\Semester;
use Faker\Generator as Faker;

$factory->define(Week::class, function (Faker $faker) {
    return [

        'semestre_id'=>function(){
            return Semester::all()->random();
       },


        'name'=>$faker->name,

        'nbers_day'=>$faker->numberBetween(1,6),

        'starting_time'=>$faker->datetime,

        'ending_time'=>$faker->datetime,
    ];
});
