<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parent_tutor;
use Faker\Generator as Faker;

$factory->define(Parent_tutor::class, function (Faker $faker) {
    return [

         'name'=>$faker->name,
         'email'=>$faker->name,
        'password'=>$faker->name,
        'code'=>$faker->name,

    ];
});
