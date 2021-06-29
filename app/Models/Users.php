<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $primary='id';
    protected $fillable=['ci','nombre','apellidoP','apellidoM','direccion','fNacimiento','foto',
    'sexo','telefono','email','email_verified_at','password','tipo'];
}