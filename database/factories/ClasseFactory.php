<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classe;
use App\School;
use App\Session;
use Faker\Generator as Faker;

$factory->define(Classe::class, function (Faker $faker) {
    return [

        'school_id'=>function(){
            return School::all()->random();
       },

       'session_id'=>function(){
        return Session::all()->random();
       },


        'name'=>$faker->name,
        'nbres_eleve'=>$faker->numberBetween(40,60),
        'nbres_period'=>$faker->randomDigit,
     //   $table->integer('nbres_heure');
        'starting_time'=>$faker->datetime,
        'ending_time'=>$faker->datetime,
    ];
});
