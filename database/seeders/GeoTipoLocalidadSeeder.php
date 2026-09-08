<?php

namespace Database\Seeders;

use App\Models\Geo\TipoLocalidad;
use Illuminate\Database\Seeder;

class GeoTipoLocalidadSeeder extends Seeder
{
    public function run(): void
    {
        $tipos_localidades = [
            [
                'nombre' => 'urbano',
            ],
            [
                'nombre' => 'rural',
            ],
        ];

        foreach ($tipos_localidades as $tipo_localidad) {
            TipoLocalidad::create($tipo_localidad);
        }
    }
}
