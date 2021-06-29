<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_reservation', function (Blueprint $table) {
            $table->increments('idServicioReserva');
            $table->unsignedinteger('servicio_id');
            $table->unsignedinteger('reserva_id');

            $table->foreign('servicio_id')->references('idServicio')->on('service');
            $table->foreign('reserva_id')->references('idReserva')->on('reservation');
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
        Schema::dropIfExists('service_reservation');
    }
}
