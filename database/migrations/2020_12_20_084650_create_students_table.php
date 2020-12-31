<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')
              ->references('id')->on('classes')
              ->onDelete('cascade');

            $table->unsignedBigInteger('parent_tutor_id');
            $table->foreign('parent_tutor_id')
             ->references('id')->on('parent_tutors')
             ->onDelete('cascade');

            $table->unsignedBigInteger('bulletins_id');
            $table->foreign('bulletins_id')
              ->references('id')->on('bulletins')
              ->onDelete('cascade');

            $table->string('name');
            $table->string('age');
            $table->string('sex');
            $table->string('class');
            $table->string('finger');
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
        Schema::dropIfExists('students');
    }
}
