<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regristro extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'registros_collection';
    protected $fillable = ['num_notificacion', 'fecha_notificacion', 'num_expediente', 'ap_paterno', 'ap_materno', 'nombre_paciente',
        'calle', 'num_exterior', 'num_interior', 'colonia', 'entidad', 'Delegacion-municipio', 'cp', 'telefono', 'fecha_nacimiento', 'sexo',
        'altura', 'peso', 'masa_corporal'
    ];
}
