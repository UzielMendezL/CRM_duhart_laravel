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
            $table->date('dateEstimation');
            $table->string('status');
            $table->integer('idWorkSite');
            $table->double('total');
            $table->string('notes');
            $table->boolean('statusOfAprobation');
            $table->date('dateVigency');
            $table->double('disccount');
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
