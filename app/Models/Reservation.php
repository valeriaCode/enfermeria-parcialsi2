<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table='reservation';
    protected $primaryKey='idReserva';
    protected $fillable=['paciente','destino','rango_edad','servicio','paquete','fecha_Reserva','asignacion_id','paciente_id','periodo_id'];
}
