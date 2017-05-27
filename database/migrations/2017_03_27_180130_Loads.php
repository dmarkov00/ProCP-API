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
        Schema::create('loads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('startLocation_id')->unsigned();
            $table->integer('endLocation_id')->unsigned();
            $table->string('content');
            $table->double('weight');
<<<<<<< HEAD
            $table->dateTime('deadline');
			$table->dateTime('arrivaldate');
=======
            $table->date('deadline');
            $table->date('actualArrivalTime');
>>>>>>> c455a64df05dc23750445ba60ef48802f9237c0c
            $table->boolean('delivered')->default(false);
            $table->double('fullsalary');
			$table->double('delayfeePercHour');
			$table->double('finalsalary');
            $table->integer('client_id')->unsigned();
            $table->integer('truck_id')->unsigned()->nullable();
            //$table->foreign('startLocation_id')->references('id')->on('locations')->onDelete('cascade');
            //$table->foreign('endLocation_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loads');
    }
}
