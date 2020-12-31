<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentSvgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_svgs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('parent_tutor_id')->unsigned();

            $table->bigInteger('svg_id')->unsigned();

            $table->foreign('parent_tutor_id')->references('id')->on('parent_tutors')

                ->onDelete('cascade');

            $table->foreign('svg_id')->references('id')->on('svgs')

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
        Schema::dropIfExists('parent_svgs');
    }
}
