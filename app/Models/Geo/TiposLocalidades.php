<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Geo\Municipio;

class TiposLocalidades extends Model
{
    use SoftDeletes;

    protected $table = 'geo.tipos_localidades';

    protected $fillable = [
        'nombre',
        'is_active'
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
