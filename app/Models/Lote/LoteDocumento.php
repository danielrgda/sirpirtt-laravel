<?php

namespace App\Models\Lote;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoteDocumento extends Model
{
    use SoftDeletes;

    protected $table = 'lote.documentos';

    protected $fillable = [
        'lote_id',
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