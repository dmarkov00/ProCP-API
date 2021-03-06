<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Companies extends Migration
{
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address')->unique();
            $table->string('companyName')->unique();
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
        Schema::dropIfExists('companies');
    }
}
