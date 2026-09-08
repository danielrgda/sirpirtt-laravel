<?php

namespace Database\Seeders;

use App\Models\Documento\Tipo;
use Illuminate\Database\Seeder;

class DocumentoTipoSeeder extends Seeder
{
    public function run(): void
    {
        $tipos = [
            [
                'nombre' => 'Copia de Identificación Oficial del Cedente',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Acta de Nacimiento del Cedente',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de CURP del Cedente',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Acta de Matrimonio del Cedente',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia Identificación Oficial del Conyuge del Cedente',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Acta de Nacimiento del Conyuge del Cedente',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Identificación Oficial del Cesionario',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Acta de Nacimiento del Cesionario',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de CURP del Cesionario',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Acta de Matrimonio del Cesionario',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia Identificación Oficial del Conyuge del Cesionario',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Acta de Nacimiento del Conyuge del Cesionario',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Cesión de Derechos',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Recibo de Pago de Cesión',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Comprobante de Domicilio',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Asignación del Predio',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Contrato de Compra Venta/Compromiso de Pago',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Recibos de Pagos Realizados',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Copia de Recibo de Pago Total',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Constancia de No Adeudo Expedido por Finanzas',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Verificación Física expedida por la Dirección y/o Representación',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Escrito Bajo Protesta de decir Verdad por el Beneficiario',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Constancia de no haber sido beneficiado con Título de Propiedad',
                'descripcion' => '',
            ],
            [
                'nombre' => 'Validación Expediente por Representante o Responsable',
                'descripcion' => '',
            ],
        ];

        foreach ($tipos as $tipo) {
            Tipo::create($tipo);
        }
    }
}
