<?php

namespace App\Models\Documento;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requisito extends Model
{
    use SoftDeletes;

    protected $table = 'documento.requisitos';

    protected $fillable = [
        'catalogo_id',
        'tipo_id',
        'es_obligatorio',
        'unico',
        'vigencia',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}