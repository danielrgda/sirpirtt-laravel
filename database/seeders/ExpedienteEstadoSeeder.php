<?php

namespace Database\Seeders;

use App\Models\Expediente\Estado;
use Illuminate\Database\Seeder;

class ExpedienteEstadoSeeder extends Seeder
{
    public function run(): void
    {
        $estados = [
            [
                'nombre' => 'Representación',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Revisión',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Titulación',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Juridico',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Finalizado',
                'descripcion' => '',
            ],
        ];

        foreach ($estados as $estado) {
            Estado::create($estado);
        }
    }
}
