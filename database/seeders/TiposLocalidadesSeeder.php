<?php

namespace Database\Seeders;

use App\Models\Geo\TiposLocalidades;
use Illuminate\Database\Seeder;

class TiposLocalidadesSeeder extends Seeder
{
    public function run(): void
    {
        $localidades = [
            [
                'nombre' => 'urbano',
            ],
            [
                'nombre' => 'rural',
            ],
        ];

        foreach ($localidades as $localidad) {
            TiposLocalidades::create($localidad);
        }
    }
}
