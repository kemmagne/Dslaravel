<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Classe;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [

        'class_id'=>function(){
            return Classe::all()->random();
       },

        'name'=>$faker->name,
        'nbers_period'=>$faker->randomDigit,
      //  $table->integer('nbers_hour');
        'coeficient'=>$faker->numberBetween(1,6),
        'starting_time'=>$faker->datetime,
        'ending_time'=>$faker->datetime,
    ];
});
