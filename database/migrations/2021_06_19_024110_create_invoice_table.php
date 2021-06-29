<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('idfactura');
            $table->unsignedinteger('reserva_id');
            $table->unsignedinteger('tipoPago_id');

            $table->foreign('reserva_id')->references('idReserva')->on('reservation');
            $table->foreign('tipoPago_id')->references('idTipoPago')->on('type_pay');

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
        Schema::dropIfExists('invoice');
    }
}
