<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    public function especialidad_()
    {
        return $this->belongTo('CBA\Especialidad'::Class, 'especialidad', 'id');
    }

    public function miembro_()
    {
        return $this->belongTo('CBA\Cliente'::Class, 'paciente', 'id');
    }

    public function encargado_()
    {
        return $this->belongTo('CBA\User'::Class, 'encargado', 'id');
    }
}
