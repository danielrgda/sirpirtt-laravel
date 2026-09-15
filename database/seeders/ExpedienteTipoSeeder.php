<?php

namespace Database\Seeders;

use App\Models\Expediente\Tipo;
use Illuminate\Database\Seeder;

class ExpedienteTipoSeeder extends Seeder
{
    public function run(): void
    {
        $tipos = [
            [
                'nombre' => 'Directo',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Cesion',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Ejido',
                'descripcion' => '',
            ],
        ];

        foreach ($tipos as $tipo) {
            Tipo::create($tipo);
        }
    }
}
