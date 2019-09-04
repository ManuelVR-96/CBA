<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model

{   
    
    public function programa_(){
        return $this->hasMany('App/Programa'::Class);
    }

    public function valoracion_(){
        return $this->hasMany('App/Valoracion'::Class);
    }
    protected $table = 'clientes';
    protected $fillable = [
        'nombres',
    ];
}
