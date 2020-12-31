<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Year;
use Faker\Generator as Faker;

$factory->define(Year::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,

        'nbers_week'=>$faker->randomDigit,

        'nbers_semester'=>$faker->numberBetween(1,6),


        'starting_time'=>$faker->datetime,

        'ending_time'=>$faker->datetime,

    ];
});
