<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trimester;
use App\Year;
use Faker\Generator as Faker;

$factory->define(Trimester::class, function (Faker $faker) {
    return [

        'year_id'=>function(){
            return Year::all()->random();
       },


        'name'=>$faker->name,

        'nbers_week'=>$faker->numberBetween(1,12),

        'starting_time'=>$faker->datetime,

        'ending_time'=>$faker->datetime,

    ];
});
