<?php

namespace CBA;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use CBA\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'nombres', 'apellidos', 'cargo', 'nivel_educativo', 'formación', 'dirección',  
        'fecha_de_nacimiento', 'fecha_de_vinculación', 'rol', 'telefono', 'email', 'password', 'avatar', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function programa()
    {
        return $this->hasMany('CBA\Programa');
    }

    public function plan()
    {
        return $this->hasMany('CBA\planEstrategico');
    }

    public function notificacion_()
    {
        return $this->hasMany('CBA\notificacion');
    }

    
    public function especialidad_()
    {
        return $this->belongsTo('CBA\Especialidad'::Class, 'cargo', 'id');
    }

     /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}

  

