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
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('idEntry');
            $table->integer('idMaterial');
            $table->integer('quantity');
            $table->date('entryDate');
            $table->integer('idEmployed');
            $table->double('priceUnitary');
            $table->integer('idUser');
            $table->date('publisherDate');
            $table->integer('idStore');
            $table->string('invoiceNumber');
            $table->mediumText('invoicePhoto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
};
