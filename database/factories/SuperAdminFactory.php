<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Super_admin;
use App\School;
use Faker\Generator as Faker;

$factory->define(Super_admin::class, function (Faker $faker) {
    return [

        'name'=>$faker->name,
        'email'=>$faker->name,
        'password'=>$faker->name,

        'school_id'=>function(){
            return School::all()->random();
       },
    ];
});
