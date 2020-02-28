<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class seguimiento_miembro extends Model
{
    public function miembro_()
    {
        return $this->belongsTo('CBA\Cliente'::Class, 'miembro', 'id');
    }
}
