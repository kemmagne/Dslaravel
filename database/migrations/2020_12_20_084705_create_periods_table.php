<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');

             $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
              ->references('id')->on('students')
              ->onDelete('cascade');


              $table->unsignedBigInteger('day_id');
              $table->foreign('day_id')
                ->references('id')->on('days')
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
        Schema::dropIfExists('periods');
    }
}
