<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drivers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('licensePlate')->unique();
            $table->integer('driver_id')->unsigned()->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->double('avgFuelComsumption');
            $table->double('payLoadCapacity');
            $table->double('weight');
            $table->double('height');
            $table->double('width');
            $table->double('length');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trucks');
    }
}
