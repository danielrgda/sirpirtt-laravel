<?php

namespace App\Models\Documento;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    use SoftDeletes;

    protected $table = 'documento.documentos';

    protected $fillable = [
        'requisito_id',
        'entidad_id',
        'entidad',
        'nombre_archivo',
        'url',
        'mime',
        'size_bytes',
        'sha256',
        'estado_verificacion',
        'comentarios_verificacion',
        'notas',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}