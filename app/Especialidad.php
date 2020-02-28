<?php

namespace CBA;
use CBA\User;


use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    // public function especialidad()
    // {
    //     return $this->belongsTo();
    // }

//     public function especialista()
// {
//     return $this->hasOne('CBA\User'::Class, 'id');
// }
public function programa_()
{
    return $this->hasMany('CBA\Programa'::Class);
}
public function valoracion()
{
    return $this->hasMany('CBA\Valoracion'::Class);
}

public function especialista()
    {
        return $this->hasMany(User::Class);
    }

public function notificacion_()
    {
        return $this->hasMany('CBA\notificacion'::Class);
    }

}
