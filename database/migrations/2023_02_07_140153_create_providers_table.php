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
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('idProvider');
            $table->string('categoryP',50)->nullable();
            $table->string('nameProvider',255)->nullable();
            $table->string('rfcProvider',50)->nullable();
            $table->string('typeProvider',50)->nullable();
            $table->string('bank', 255)->nullable();
            $table->string('clabe',50)->nullable();
            $table->string('account',50)->nullable();
            $table->string('nameSaving',50)->nullable();
            $table->string('contact1',50)->nullable();
            $table->double('phone1',5)->nullable();
            $table->string('mail1', 255)->nullable();
            $table->boolean('status')->nullable();
            $table->string('rfc')->nullable();
            $table->string('direction')->nullable();
            $table->string('delegation',50)->nullable();
            $table->string('state',50)->nullable();
            $table->string('country',50)->nullable();
            $table->integer('cp')->nullable();
            $table->string('bankType',50)->nullable();
            $table->string('bunissesRotation')->nullable();
            $table->mediumText('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('turn')->nullable();
            $table->string('type')->nullable();
            $table->string('note')->nullable();
            $table->string('email2')->nullable();
            $table->string('contact2')->nullable();
            $table->string('emailOffice')->nullable();
            $table->integer('phone2')->nullable();
            $table->integer('officeContact')->nullable();
            $table->string('commercialName')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
};
