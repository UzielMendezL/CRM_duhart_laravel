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
        Schema::create('estimations', function (Blueprint $table) {
            $table->increments('idEstimation');
            $table->string('nameEstimation');
            $table->string('StatusEstimation');
            $table->double('total');
            $table->date('dateValidity');
            $table->integer('idClient');
            $table->integer('idWorkSite');
            $table->string('Country');
            $table->string('Notes');
            $table->boolean('EstatusOfAprobation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimations');
    }
};
