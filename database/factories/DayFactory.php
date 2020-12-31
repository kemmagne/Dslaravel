<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Day;
use App\Week;

use Faker\Generator as Faker;

$factory->define(Day::class, function (Faker $faker) {
    return [

        'week_id'=>function(){
            return Week::all()->random();
       },


        'name'=>$faker->name,
        'nbres_periode'=>$faker->numberBetween(1,9),
        'starting_time'=>$faker->datetime,

        'ending_time'=>$faker->datetime,
    ];
});
