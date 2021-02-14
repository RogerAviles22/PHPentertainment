<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_Entretenimiento extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_historial_entretenimiento';
    use HasFactory;
}
