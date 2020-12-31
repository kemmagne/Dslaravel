<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorSvgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrator_svgs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('admin_id')->unsigned();

            $table->bigInteger('svg_id')->unsigned();

            $table->foreign('admin_id')->references('id')->on('super_admins')

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
        Schema::dropIfExists('administrator_svgs');
    }
}
