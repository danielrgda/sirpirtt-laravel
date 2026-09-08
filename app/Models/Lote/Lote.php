<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Geo\Manzana;

class Lote extends Model
{
    use SoftDeletes;

    protected $table = 'lote.lotes';

    protected $fillable = [
        'manzana_id',
        'clave',
        'nombre',
        'clave_catastral',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function Manzana()
    {
        return $this->belongsTo(Manzana::class, 'manzana_id');
    }
}
