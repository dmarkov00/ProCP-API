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
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->unique();
            $table->string('fName');
            $table->string('lName');
            $table->integer('phoneNbr');
            $table->boolean('taken')->default(false);
            $table->string('email');
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
        Schema::dropIfExists('drivers');
    }
}
