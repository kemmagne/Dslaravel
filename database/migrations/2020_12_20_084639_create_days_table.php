<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('week_id');
            $table->foreign('week_id')
              ->references('id')->on('weeks')
              ->onDelete('cascade');


            $table->string('name');
            $table->string('nbres_periode');
            $table->time('starting_time');

            $table->time('ending_time');

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
        Schema::dropIfExists('days');
    }
}
