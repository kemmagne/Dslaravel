<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('semestre_id');
            $table->foreign('semestre_id')
              ->references('id')->on('semesters')
              ->onDelete('cascade');

            $table->string('name');

            $table->integer('nbers_day');

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
        Schema::dropIfExists('weeks');
    }
}
