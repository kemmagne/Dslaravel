<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Administrator_svg;
use Faker\Generator as Faker;
use App\Super_admin;
use App\Svg;

$factory->define(Administrator_svg::class, function (Faker $faker) {
    return [
        'admin_id'=>function(){
            return Super_admin::all()->random();
       },

       'svg_id'=>function(){
        return Svg::all()->random();
   },
    ];
});
