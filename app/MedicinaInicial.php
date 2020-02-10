<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class MedicinaInicial extends Model
{
    public function miembro_()
    {
        return $this->belongsTo('CBA\Cliente'::Class, 'miembro', 'id');
    }
}
