<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletin_courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('bulletin_id')->unsigned();

            $table->bigInteger('course_id')->unsigned();

            $table->foreign('bulletin_id')->references('id')->on('bulletins')

                ->onDelete('cascade');

            $table->foreign('course_id')->references('id')->on('courses')

                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulletin_courses');
    }
}
