<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')
              ->references('id')->on('schools')
              ->onDelete('cascade');
              $table->unsignedBigInteger('session_id');
              $table->foreign('session_id')
                ->references('id')->on('sessions')
                ->onDelete('cascade');
            $table->string('name');
            $table->integer('nbres_eleve');
            $table->integer('nbres_period');
         //   $table->integer('nbres_heure');
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
        Schema::dropIfExists('classes');
    }
}
