<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;

    protected $table = 'auth.usuarios';
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'sig_id',
        'sig_usuario',
        'responsabilidad_id',
        'popup_nuevo'
    ];
}
