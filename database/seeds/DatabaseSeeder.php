<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Svg::class,50)->create();
        factory(App\Parent_tutor::class,50)->create();
        factory(App\School::class,50)->create();
        factory(App\Super_admin::class,50)->create();
        factory(App\Session::class,50)->create();
        factory(App\Classe::class,50)->create();
        factory(App\Course::class,50)->create();
        factory(App\Year::class,50)->create();
        factory(App\Trimester::class,50)->create();
        factory(App\Bulletin::class,50)->create();
         factory(App\Semester::class,50)->create();
         factory(App\Week::class,50)->create();
        factory(App\Day::class,50)->create();
        factory(App\Student::class,50)->create();
        factory(App\Period::class,50)->create();


        factory(App\Semester_bulletin::class,50)->create();
         factory(App\Parent_svg::class,50)->create();
        factory(App\Course_student::class,50)->create();
        factory(App\Administrator_svg::class,50)->create();
    }
}
