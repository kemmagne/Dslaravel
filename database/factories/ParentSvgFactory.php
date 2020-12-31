<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parent_svg;
use Faker\Generator as Faker;
use App\Parent_tutor;
use App\Svg;

$factory->define(Parent_svg::class, function (Faker $faker) {
    return [

        'parent_tutor_id'=>function(){
            return Parent_tutor::all()->random();
       },

       'svg_id'=>function(){
        return Svg::all()->random();
   },
    ];
});
