<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $table = 'coches';

    public function imagenes()
    {
        return $this->hasMany('App\Imagen');
    }
}
