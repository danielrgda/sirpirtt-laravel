<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Geo\Localidad;

class Asentamiento extends Model
{
    use SoftDeletes;

    protected $table = 'geo.municipios';

    protected $fillable = [
        'nombre',
        'codigo_postal',
        'localidad_id',
        'tipo_asentamiento_id',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function localidad()
    {
        return $this->belongsTo(Localidad::class, 'localidad_id');
    }
}
