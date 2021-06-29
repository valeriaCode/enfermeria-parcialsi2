<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('idReserva');
            $table->string('paciente');
            $table->string('destino');
            $table->string('rango_edad');
            $table->string('servicio');
            $table->string('paquete');
            $table->date('fecha_Reserva');

            //$table->unsignedinteger('asignacion_id');
            //$table->unsignedinteger('paciente_id');
            //$table->unsignedinteger('periodo_id');

            //$table->foreign('asignacion_id')->references('idAsignacion')->on('assignment');
            //$table->foreign('paciente_id')->references('idPaciente')->on('patient');
            //$table->foreign('periodo_id')->references('idPeriodo')->on('period');

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
        Schema::dropIfExists('reservation');
    }
}
