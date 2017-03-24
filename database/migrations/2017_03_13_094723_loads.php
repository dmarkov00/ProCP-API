<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Loads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('est_time_driving');
            $table->integer('est_distance');
            $table->double('est_fuelConsumption');
            $table->double('est_cost');
            $table->integer('act_time_driving');
            $table->integer('act_distance');
            $table->double('act_fuelConsumption');
            $table->double('act_cost');
            $table->double('sum_salaries');
            $table->double('revenue');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('truck_id')->unsigned()->unique();
            $table->integer('company_id')->unsigned()->unique();
            $table->foreign('truck_id')->references('id')->on('trucks');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
