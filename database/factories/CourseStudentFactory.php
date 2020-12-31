<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course_student;
use Faker\Generator as Faker;
use App\Course;
use App\Student;

$factory->define(Course_student::class, function (Faker $faker) {
    return [

            'course_id'=>function(){
                return Course::all()->random();
           },

           'student_id'=>function(){
            return Student::all()->random();
       },

    ];
});
