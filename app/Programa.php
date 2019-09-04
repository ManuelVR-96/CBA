<?php

namespace CBA;
use CBA\User;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public function especialidad_()
    {
        return $this->belongsTo('CBA\Especialidad'::Class, 'especialidad', 'id');
    }

    public function miembro_()
    {
        return $this->belongsTo('CBA\Cliente'::Class, 'miembro', 'id');
    }

    public function encargado_()
    {
        return $this->belongsTo(User::Class, 'encargado', 'id');
    }
}
