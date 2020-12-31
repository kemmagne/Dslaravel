<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            /*   $table->unsignedBigInteger('jour_id');
               $table->foreign('jour_id')
                 ->references('id_jour')->on('jours')
                 ->onDelete('cascade');  */
                 $table->unsignedBigInteger('class_id');
                 $table->foreign('class_id')
                   ->references('id')->on('classes')
                   ->onDelete('cascade');

               $table->string('name');
               $table->string('nbers_period');
             //  $table->integer('nbers_hour');
               $table->integer('coeficient');
               $table->dateTime('starting_time');
               $table->dateTime('ending_time');
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
        Schema::dropIfExists('courses');
    }
}
