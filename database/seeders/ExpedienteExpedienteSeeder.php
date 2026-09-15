<?php

namespace Database\Seeders;

use App\Models\Expediente\Expediente;
use Illuminate\Database\Seeder;

class ExpedienteExpedienteSeeder extends Seeder
{
    public function run(): void
    {
        $clave = "001";
        $expedientes = [
            [
                'clave_expediente' => $clave,
                'solicitante_id' => '1',
                'lote_id' => '1',
                'tipo_id' => '2',
                'estado_id' => '2',
                'anio' => '2026'
            ],
        ];

        foreach ($expedientes as $expediente) {
            Expediente::create($expediente);
        }
    }
}
