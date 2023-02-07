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
        Schema::create('material_suppliers', function (Blueprint $table) {
            $table->increments('idMaterialSupplier');
            $table->integer('idProvider')->nullable();
            $table->string('materialCode',25)->nullable();
            $table->double('supplierPrice')->nullable();
            $table->integer('idMaterial')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_suppliers');
    }
};
