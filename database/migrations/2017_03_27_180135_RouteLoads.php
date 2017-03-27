<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RouteLoads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routeLoads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('route_id')->unsigned();
            $table->integer('load_id')->unsigned();
            $table->integer('driver_id')->unsigned();
            $table->date('actualArrivalDate');
            $table->string('comment')->nullable();
            $table->foreign('route_id')->references('id')->on('routes');
            $table->foreign('load_id')->references('id')->on('loads');
            $table->foreign('driver_id')->references('id')->on('drivers');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routeLoads');
    }
}
