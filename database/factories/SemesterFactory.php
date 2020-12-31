<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Semester;
use App\Trimester;
use Faker\Generator as Faker;

$factory->define(Semester::class, function (Faker $faker) {
    return [

        'trimester_id'=>function(){
            return Trimester::all()->random();
       },


        'name'=>$faker->name,

        'nbers_week'=>$faker->numberBetween(1,10),

        'starting_time'=>$faker->datetime,

        'ending_time'=>$faker->datetime,
    ];
});
