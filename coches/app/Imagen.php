<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';

    public function coche()
    {
        return $this->belongsTo('App\Coche');
    }
}
