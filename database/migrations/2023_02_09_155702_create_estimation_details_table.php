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
        Schema::create('estimation_details', function (Blueprint $table) {
            $table->increments('idEstimationDetails');
            $table->integer('idEstimation');
            $table->integer('idProduct');
            $table->string('measures');
            $table->string('wood');
            $table->string('finish');
            $table->double('quantity');
            $table->string('description');
            $table->string('unit');
            $table->double('priceUnitary');
            $table->double('mount');
            $table->integer('idMeasure');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimation_details');
    }
};
