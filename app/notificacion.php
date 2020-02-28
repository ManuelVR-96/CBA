<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class notificacion extends Model
{
    public function miembro_()
    {
        return $this->belongsTo('CBA\Cliente'::Class, 'paciente', 'id');
    }

    public function remite_()
    {
        return $this->belongsTo(User::Class, 'remite', 'id');
    }

    public function especialidad_()
    {
        return $this->belongsTo('CBA\Especialidad'::Class, 'especialidad', 'id');
    }
    
}
