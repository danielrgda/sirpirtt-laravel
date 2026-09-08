<?php

namespace App\Models\Documento;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalogo extends Model
{
    use SoftDeletes;

    protected $table = 'documento.catalogos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}