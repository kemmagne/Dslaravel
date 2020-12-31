<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('trimester_id');
           $table->foreign('trimester_id')
             ->references('id')->on('trimesters')
             ->onDelete('cascade');

           $table->string('name');

           $table->integer('nbers_week');

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
        Schema::dropIfExists('semesters');
    }
}
