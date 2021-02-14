<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretenimiento extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_entretenimiento';
    use HasFactory;
}
