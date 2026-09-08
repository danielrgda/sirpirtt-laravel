<?php

namespace App\Models\Solicitante;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SolicitanteDocumento extends Model
{
    use SoftDeletes;

    protected $table = 'solicitante.documentos';

    protected $fillable = [
        'solicitante_id',
        'documento_id',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}