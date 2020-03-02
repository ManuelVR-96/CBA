<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class planEstrategico extends Model
{
    public function creador_()
    {
        return $this->belongsTo(User::Class, 'creador', 'id');
    }

    public function actualizado_()
    {
        return $this->belongsTo(User::Class, 'actualizado_por', 'id');
    }
}
