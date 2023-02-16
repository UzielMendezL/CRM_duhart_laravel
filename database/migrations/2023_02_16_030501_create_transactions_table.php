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
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('idTransaction');
            $table->date('elaboratedDate')->nullable();
            $table->string('concept', 250)->nullable();
            $table->integer('idAccount')->nullable();
            $table->double('mount')->nullable();
            $table->string('status', 50)->nullable();
            $table->string('invoice', 50)->nullable();
            $table->mediumText('invoiceImage')->nullable();
            $table->mediumText('providerQuotes')->nullable();
            $table->string('notes', 250)->nullable();
            $table->integer('idProvider')->nullable();
            $table->string('nameProvider', 250)->nullable();
            $table->date('payDay')->nullable();
            $table->mediumText('proofOfPayment')->nullable();
            $table->integer('elaborateEmployee')->nullable();
            $table->string('providerType', 250)->nullable();
            $table->string('conceptType', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
