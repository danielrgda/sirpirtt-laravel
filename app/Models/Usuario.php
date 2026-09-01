<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;

    protected $table = 'auth.usuarios';
    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'telefono',
        'sig_id',
    ];
}
