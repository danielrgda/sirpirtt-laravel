<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipio extends Model
{
    use SoftDeletes;

    protected $table = 'dashboard.municipios';

    protected $fillable = [
        'municipio_id',
        'popup_posx',
        'popup_posy',
        'path',
        'popup_direction',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}