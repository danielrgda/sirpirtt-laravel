<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Geo\Municipio;

class Localidad extends Model
{
    use SoftDeletes;

    protected $table = 'geo.localidades';

    protected $fillable = [
        'municipio_id',
        'clave',
        'nombre',
        'is_active',
        'tipo_localidad_id',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }
}
