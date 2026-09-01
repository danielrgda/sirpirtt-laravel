<?php

namespace Database\Seeders;

use App\Models\Geo\Municipio;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    public function run(): void
    {
        $municipios = [
            [
                'estado_id' => 3,
                'clave' => '001',
                'nombre' => 'Comondú',
            ],
            [
                'estado_id' => 3,
                'clave' => '002',
                'nombre' => 'Mulegé',
            ],
            [
                'estado_id' => 3,
                'clave' => '003',
                'nombre' => 'La Paz',
            ],
            [
                'estado_id' => 3,
                'clave' => '008',
                'nombre' => 'Los Cabos',
            ],
            [
                'estado_id' => 3,
                'clave' => '009',
                'nombre' => 'Loreto',
            ],
        ];

        foreach ($municipios as $municipio) {
            Municipio::create($municipio);
        }
    }
}