<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoAsentamiento extends Model
{
    use SoftDeletes;

    protected $table = 'geo.tipos_asentamientos';

    protected $fillable = [
        'nombre',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
