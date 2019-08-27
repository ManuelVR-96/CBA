<?php

namespace CBA;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{   protected $table = 'clientes';
    protected $fillable = [
        'nombres',
    ];
}
