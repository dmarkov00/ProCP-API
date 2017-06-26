<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Routes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('est_time_driving')->nullable()->default("0");
        $table->integer('est_distance')->nullable()->default("0");
        $table->double('est_fuelConsumption')->nullable()->default("0");
        $table->double('est_cost')->nullable()->default("0");
        $table->integer('act_time_used')->nullable()->default("0");
        $table->integer('act_distance')->nullable()->default("0");
        $table->double('act_fuelConsumption')->nullable()->default("0");
        $table->double('act_cost')->nullable()->default("0");
        $table->double('sum_salaries')->nullable()->default("0");
        $table->double('sum_actual_salaries')->nullable()->default("0");
        $table->double('revenue')->nullable()->default("0");
        $table->integer('start_location_id')->nullable()->default("0");
        $table->integer('end_location_id')->nullable()->default("0");
        $table->string('start_time')->nullable();
        $table->string('end_time')->nullable();
        $table->boolean('delivered')->default(false)->default("0");
        $table->integer('truck_id')->unsigned()->default("0");
        $table->integer('company_id')->unsigned()->default("0");
        $table->foreign('truck_id')->references('id')->on('trucks')->onDelete('cascade');
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
        Schema::dropIfExists('routes');
    }
}
