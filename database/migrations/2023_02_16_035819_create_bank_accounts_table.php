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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->increments('idAccount');
            $table->string('nameAccount', 50)->nullable();
            $table->string('bank', 50)->nullable();
            $table->boolean('status')->nullable();
            $table->string('accountNumber')->nullable();
            $table->string('tarjetAccount')->nullable();
            $table->double('total')->nullable();
            $table->string('titularName', 50)->nullable();
            $table->integer('phoneBranch')->nullable();
            $table->string('clabe',250)->nullable();
            $table->string('branchSucursal', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
};
