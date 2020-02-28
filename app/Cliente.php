<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model

{   
    
    public function programa_(){
        return $this->hasMany('App/Programa'::Class);
    }

    public function delta_(){
        return $this->hasOne('App/testDelta'::Class);
    }

    public function fisio_inicial_(){
        return $this->hasOne('App/FisioterapiaInicial'::Class);
    }

    public function geron_inicial_(){
        return $this->hasOne('App/GerontologiaInicial'::Class);
    }

    public function medica_inicial_(){
        return $this->hasOne('App/MedicinaInicial'::Class);
    }

    public function nutricional_inicial_(){
        return $this->hasOne('App/NutricionalInicial'::Class);
    }

    public function psico_inicial_(){
        return $this->hasOne('App/PsiciologicaInicial'::Class);
    }

    public function actividad_inicial_(){
        return $this->hasOne('App/ActividadInicial'::Class);
    }

    public function valoracion_(){
        return $this->hasMany('App/Valoracion'::Class);
    }

    public function notificacion_(){
        return $this->hasMany('App/notificacion'::Class);
    }
    protected $table = 'clientes';
    protected $fillable = [
        'nombres', 'cédula'
    ];
}
