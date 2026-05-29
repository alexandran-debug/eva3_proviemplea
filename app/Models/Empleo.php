<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleo extends Model
{
    protected $table = 'empleos';

    protected $fillable = [
        'titulo',
        'descripcion',
        'empresa',
        'ubicacion',
        'salario'
    ];
}
