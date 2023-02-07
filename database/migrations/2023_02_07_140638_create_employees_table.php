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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('idEmployee');
            $table->string('completeName',243)->nullable();
            $table->string('firstName',50)->nullable();
            $table->string('secondName',50)->nullable();
            $table->string('surnamePaterno',50)->nullable();
            $table->string('motherLastName',50)->nullable();
            $table->string('nickName',50)->nullable();   
            $table->dateTime('birthday')->nullable();
            $table->string('departament',50)->nullable();
            $table->string('job',50)->nullable();
            $table->string('typeOfContract',255)->nullable();
            $table->string('role',50)->nullable();
            $table->string('password',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->tinyInteger('buinissesPhone')->nullable();
            $table->string('gener',50)->nullable();
            $table->mediumText('diseases')->nullable();
            $table->mediumText('photo')->nullable();
            $table->string('socialSegurity',50)->nullable();
            $table->string('ine',50)->nullable();
            $table->mediumText('inePhoto')->nullable();
            $table->string('curp',50)->nullable();
            $table->string('street',50)->nullable();
            $table->string('cp',50)->nullable();
            $table->string('townHall',50)->nullable();
            $table->string('state',50)->nullable();
            $table->string('country',50)->nullable();
            $table->string('emergencyContact',50)->nullable();
            $table->string('emergencyNumber',50)->nullable();
            $table->string('emergencyKinship',50)->nullable();
            $table->dateTime('initDate')->nullable();
            $table->double('weekFreeSalary')->nullable();
            $table->double('monthlyFreeSalary')->nullable();
            $table->double('imssFee')->nullable();
            $table->double('infonavitFee')->nullable();
            $table->string('status',50)->nullable();
            $table->mediumText('observations')->nullable();
            $table->double('monthlyNetSalary',1)->nullable();
            $table->string('bank',50)->nullable();
            $table->string('noTarjet',50)->nullable();
            $table->mediumText('proofOfAddress')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
