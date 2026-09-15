<?php

namespace Database\Seeders;

use App\Models\Documento\Documento;
use Illuminate\Database\Seeder;

class DocumentoDocumentoSeeder extends Seeder
{
    public function run(): void
    {
        $documentos = [
            [
                'requisito_id' => '1',
                'entidad_id' => '1',
                'entidad' => 'expediente',
                'nombre_archivo' => 'eraboi.exe.bat.ini.reg.txt',
                'url' => 'asd/asd/asd',
                'mime' => 'tequiste/lleison',
                'size_bytes' => '91273918273',
                'sha256' => 'nosequevaaqui',
                'notas' => 'obviamente es un test',
            ],
        ];

        foreach ($documentos as $documento) {
            Documento::create($documento);
        }
    }
}
