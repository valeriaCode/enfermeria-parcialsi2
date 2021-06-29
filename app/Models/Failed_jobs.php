<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Failed_jobs extends Model
{
    use HasFactory;
    protected $primary='id';
    protected $fillable=['uuid','connection','queue','payload','exception','failed_at'];
}
