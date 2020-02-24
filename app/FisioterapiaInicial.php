<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class FisioterapiaInicial extends Model
{
    public function miembro_()
    {
        return $this->belongsTo('CBA\Cliente'::Class, 'miembro', 'id');
    }

    public function encargado_()
    {
        return $this->belongsTo(User::Class, 'encargado', 'id');
    }
}
