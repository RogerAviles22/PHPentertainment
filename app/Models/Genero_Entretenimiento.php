<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero_Entretenimiento extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_genero_entretenimiento';
    protected $fillable = ['id_entretenimiento', 'id_genero'];
    use HasFactory;
}
