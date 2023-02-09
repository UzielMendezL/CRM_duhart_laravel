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
            $table->increments('idDeparture');
            $table->integer('idMaterial');
            $table->integer('quantity');
            $table->date('departureDate');
            $table->integer('idEmployed');
            $table->integer('idEmployed2');
            $table->double('priceUnitary');
            $table->integer('idUser');
            $table->date('publisherDate');
            $table->integer('idEstimation');
            $table->integer('idStore');
            $table->mediumText('receiptOutput');
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
