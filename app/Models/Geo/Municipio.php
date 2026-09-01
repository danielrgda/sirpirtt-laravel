<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Geo\Estado;

class Municipio extends Model
{
    use SoftDeletes;

    protected $table = 'geo.municipios';

    protected $fillable = [
        'estado_id',
        'clave',
        'nombre',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
}