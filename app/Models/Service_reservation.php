<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_reservation extends Model
{
    use HasFactory;
    protected $primary='idServicioReserva';
    protected $fillable=['ser.vicio_id','reserva_id'];
}
