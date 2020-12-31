<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Semester_bulletin;
use Faker\Generator as Faker;
use App\Semester;
use App\Bulletin;

$factory->define(Semester_bulletin::class, function (Faker $faker) {
    return [

        'bulletin_id'=>function(){
            return Bulletin::all()->random();
       },

       'semester_id'=>function(){
        return Semester::all()->random();
   },
    ];
});
