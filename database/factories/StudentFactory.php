<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use App\Classe;
use App\Parent_tutor;
use App\Bulletin;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'class_id'=>function(){
            return Classe::all()->random();
       },

       'parent_tutor_id'=>function(){
        return Parent_tutor::all()->random();
        },

        'bulletins_id'=>function(){
            return Bulletin::all()->random();
       },


        'name'=>$faker->name,
        'age'=>$faker->numberBetween(10,22),
        'sex'=>$faker->numberBetween(1,3),
        'class'=>$faker->randomDigit,
        'finger'=>$faker->randomDigit,
    ];
});
