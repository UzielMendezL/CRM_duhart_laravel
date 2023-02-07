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
            $table->increments('idWorkSite',11);
            $table->string('nameWorkSite');
            $table->boolean('Status');
            $table->string('priority');
            $table->string('description');
            $table->string('direction');
            $table->string('cologne');
            $table->string('delegation');
            $table->string('Country');
            $table->string('State');
            $table->integer('IdClient');
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
