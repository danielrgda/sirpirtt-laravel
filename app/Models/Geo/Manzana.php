<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Geo\Asentamiento;

class Manzana extends Model
{
    use SoftDeletes;

    protected $table = 'geo.localidades';

    protected $fillable = [
        'asentamiento_id',
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

    public function asentamiento()
    {
        return $this->belongsTo(Asentamiento::class, 'asentamiento_id');
    }
}
