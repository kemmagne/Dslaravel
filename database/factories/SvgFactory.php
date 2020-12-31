<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Svg;
use Faker\Generator as Faker;

$factory->define(Svg::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->name,
        'password'=>$faker->name,
        'phone_number'=>$faker->randomDigit,
        'picture'=>$faker->word,
    ];
});
