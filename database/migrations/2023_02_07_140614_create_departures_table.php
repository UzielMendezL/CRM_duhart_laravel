<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departures', function (Blueprint $table) {
            $table->increments('idDeparture',11);
            $table->integer('idMaterial');
            $table->integer('quantity');
            $table->date('departureDate');
            $table->integer('idEmployed');
            $table->integer('idEmployed2');
            $table->integer('idEstimation');
            $table->integer('idWorkSite');
            $table->double('priceUnitary');
            $table->string('Editor');
            $table->date('dateEditor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departures');
    }
};
