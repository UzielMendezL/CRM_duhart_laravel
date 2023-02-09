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
        Schema::create('work_sites', function (Blueprint $table) {
            $table->increments('idWorkSite');
            $table->string('nameWorkSite');
            $table->integer('idClient');
            $table->boolean('status');
            $table->string('description');
            $table->string('direction');
            $table->string('cologne');
            $table->string('delegation');
            $table->string('country');
            $table->string('state');
            $table->string('priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_sites');
    }
};
