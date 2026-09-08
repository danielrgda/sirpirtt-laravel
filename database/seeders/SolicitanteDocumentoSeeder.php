<?php

namespace Database\Seeders;

use App\Models\Solicitante\SolicitanteDocumento;
use Illuminate\Database\Seeder;

class SolicitanteDocumentoSeeder extends Seeder
{
    public function run(): void
    {
        $solicitantes_documentos = [
            [
                'solicitante_id' => '1',
                'documento_id' => '1',
            ],
        ];

        foreach ($solicitantes_documentos as $solicitantes_documento) {
            SolicitanteDocumento::create($solicitantes_documento);
        }
    }
}
