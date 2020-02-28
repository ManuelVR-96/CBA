<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    public function especialidad_()
    {
        return $this->belongsTo('CBA\Especialidad'::Class, 'especialidad', 'id');
    }

    public function miembro_()
    {
        return $this->belongsTo('CBA\Cliente'::Class, 'paciente', 'id');
    }

    public function encargado_()
    {
        return $this->belongsTo(User::Class, 'encargado', 'id');
    }

    public function actualizado_()
    {
        return $this->belongsTo(User::Class, 'actualizado', 'id');
    }
}
