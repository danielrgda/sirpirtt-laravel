<?php

namespace Database\Seeders;

use App\Models\Documento\Catalogo;
use Illuminate\Database\Seeder;

class DocumentoCatalogoSeeder extends Seeder
{
    public function run(): void
    {
        $catalogos = [
            [
                'nombre' => 'solicitante',
            ],
            [
                'nombre' => 'lote',
            ],
            [
                'nombre' => 'expediente_directo',
            ],
            [
                'nombre' => 'expediente_cesion',
            ],
            [
                'nombre' => 'expediente_ejido',
            ],
        ];

        foreach ($catalogos as $catalogo) {
            Catalogo::create($catalogo);
        }
    }
}
