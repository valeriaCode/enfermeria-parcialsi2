<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_product', function (Blueprint $table) {
            $table->increments('idServicioProducto');
            $table->unsignedinteger('servicio_id');
            $table->unsignedinteger('insumo_id');

            $table->foreign('servicio_id')->references('idServicio')->on('service');
            $table->foreign('insumo_id')->references('idInsumo')->on('product');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_product');
    }
}
