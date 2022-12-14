<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosLaborales extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'alumno',
        'nombre',
        'domicilio',
        'telefono',
        'puesto',
        'departamento',
        'relacion_estudio',
        'razon_trabajo',
    ];
}
