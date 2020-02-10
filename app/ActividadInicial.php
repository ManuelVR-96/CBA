<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class ActividadInicial extends Model
{
    public function miembro_()
    {
        return $this->belongsTo('CBA\Cliente'::Class, 'miembro', 'id');
    }
}
