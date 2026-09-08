<?php

namespace Database\Seeders;

use App\Models\Solicitante\Solicitante;
use Illuminate\Database\Seeder;

class SolicitanteSolicitanteSeeder extends Seeder
{
    public function run(): void
    {
        $solicitantes = [
            [
                'nombre' => 'Daniel Alejandro',
                'apellido_p' => 'Romero',
                'apellido_m' => 'Guluarte',
                'curp' => 'ROGD871112HBSMLN06',
                'fecha_nacimiento' => now(),
            ],
        ];

        foreach ($solicitantes as $solicitante) {
            Solicitante::create($solicitante);
        }
    }
}
