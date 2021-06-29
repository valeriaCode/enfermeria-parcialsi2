<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_pay extends Model
{
    use HasFactory;
    protected $primary='idTipoPago';
    protected $fillable=['tipo'];
}
