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
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('idMaterial');
            $table->string('nameMaterial',250)->nullable();
            $table->string('inventory',50)->nullable();
            $table->string('category',50)->nullable();
            $table->string('group3',50)->nullable();
            $table->string('group4',50)->nullable();
            $table->string('group5',50)->nullable();
            $table->string('group6',50)->nullable();
            $table->string('group7',50)->nullable();
            $table->string('mark',50)->nullable();
            $table->double('unitaryPrice')->nullable();
            $table->mediumText('photo')->nullable();
            $table->integer('stock')->nullable();
            $table->mediumText('note')->nullable();
            $table->double('stockMinimum')->nullable();
            $table->string('unity')->nullable();
            $table->string('editor')->nullable();
            $table->string('editionStatus')->nullable();
            $table->string('alias')->nullable();
            $table->date('date')->nullable();
            $table->integer('providerActual')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
};
