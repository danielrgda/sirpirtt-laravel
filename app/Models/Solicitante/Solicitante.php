<?php

namespace App\Models\Solicitante;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitante extends Model
{
    use SoftDeletes;

    protected $table = 'solicitante.solicitantes';

    protected $fillable = [
        'nombre',
        'apellido_p',
        'apellido_m',
        'curp',
        'fecha_nacimiento',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
