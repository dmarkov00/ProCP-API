<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trucks extends Migration
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
            $table->integer('company_id')->unsigned()->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->double('avgFuelComsumption')->default(0);
            $table->double('payLoadCapacity')->nullable();
            $table->double('weight');
            $table->double('height');
            $table->double('width');
            $table->double('length');
            $table->boolean('taken')->default(false);
            $table->boolean('broken')->default(false);
            $table->timestamps();
            //$table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            
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
