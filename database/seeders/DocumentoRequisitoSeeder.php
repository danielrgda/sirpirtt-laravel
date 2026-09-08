<?php

namespace Database\Seeders;

use App\Models\Documento\Requisito;
use Illuminate\Database\Seeder;

class DocumentoRequisitoSeeder extends Seeder
{
    public function run(): void
    {
        $requisitos = [
            [
                'tipo_id' => '1',
                'catalogo_id' => '3',
            ],
            [
                'tipo_id' => '2',
                'catalogo_id' => '3',
            ],
            [
                'tipo_id' => '3',
                'catalogo_id' => '3',
            ],
            [
                'tipo_id' => '4',
                'catalogo_id' => '3',
            ],
            [
                'tipo_id' => '1',
                'catalogo_id' => '2',
            ],
            [
                'tipo_id' => '2',
                'catalogo_id' => '2',
            ],
        ];

        foreach ($requisitos as $requisito) {
            Requisito::create($requisito);
        }
    }
}
