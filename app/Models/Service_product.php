<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_product extends Model
{
    use HasFactory;
    protected $primary='idServicioProducto';
    protected $fillable=['servicio_id','insumo_id'];
}
