<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Regristro extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'regristros_collection';
    public function reaccion()
    {
        //Esta declaración permite acceder a los registros realcionados desde un modelo dado
        return $this->hasMany(Reaccion::class);
    }
}



