<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
class Reaccion extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'reaccion_collection';

    public function registro()
    {
        //Establecemos una relación de pertenencia entre dos colecciones
        return $this->belongsTo(Regristro::class);
    }
}
