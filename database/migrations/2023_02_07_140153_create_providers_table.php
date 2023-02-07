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
            $table->string('nameCommercial',50)->nullable();
            $table->string('rfc',50)->nullable();
            $table->mediumText('direction',50)->nullable();
            $table->string('delegation',50)->nullable();
            $table->string('state',50)->nullable();
            $table->string('country',50)->nullable();
            $table->string('cp',5)->nullable();
            $table->string('bankType', 255)->nullable();
            $table->string('account', 255)->nullable();
            $table->mediumText('photo')->nullable();
            $table->mediumText('siteWeb')->nullable();
            $table->integer('phone')->nullable();
            $table->string('contact',50)->nullable();
            $table->string('email',50)->nullable();
            $table->mediumText('bunissesRotation')->nullable();
            $table->string('type',50)->nullable();
            $table->mediumText('note')->nullable();
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
