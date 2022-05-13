<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discos extends Model
{
    use HasFactory;
    protected $fillable = [
        'artista', 'album', 'anio', 'genero','portada', 'enlace', 'calificaciones'
    ];
}
