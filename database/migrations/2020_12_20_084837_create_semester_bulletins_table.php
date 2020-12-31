<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemesterBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_bulletins', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('semester_id')->unsigned();

            $table->bigInteger('bulletin_id')->unsigned();

            $table->foreign('semester_id')->references('id')->on('semesters')

                ->onDelete('cascade');

            $table->foreign('bulletin_id')->references('id')->on('bulletins')

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
        Schema::dropIfExists('semester_bulletins');
    }
}
