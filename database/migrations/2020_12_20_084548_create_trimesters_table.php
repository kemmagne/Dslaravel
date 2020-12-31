<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrimestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trimesters', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('year_id');
            $table->foreign('year_id')
              ->references('id')->on('years')
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
        Schema::dropIfExists('trimesters');
    }
}
