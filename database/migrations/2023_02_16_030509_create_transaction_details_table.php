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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->increments('idTransactionDetail');
            $table->integer('idTransaction');
            $table->integer('idEstimation')->nullable();
            $table->integer('idInventory')->nullable();
            $table->integer('idConcept')->nullable();
            $table->string("nameConcept",250)->nullable();
            $table->decimal('mount')->nullable();
            $table->string('note',250)->nullable();
            $table->string('unity',50)->nullable();
            $table->decimal('quantity')->nullable();
            $table->decimal('unitaryPrice')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
};
