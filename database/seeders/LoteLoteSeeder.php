<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoteLoteSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('lote.lotes')->insert([
            [
                'manzana_id' => '1',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 01)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '1',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 01)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '2',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 02)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '2',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 02)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '3',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 03)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '3',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 03)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '4',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 04)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '4',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 04)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '5',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 05)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '5',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 05)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '6',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 06)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '6',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 06)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '7',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 07)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '7',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 07)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '8',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 08)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '8',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 08)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '9',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 09)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '9',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 09)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '10',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 010)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '10',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 010)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '11',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 011)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '11',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 011)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '12',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 012)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '12',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 012)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '13',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 013)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '13',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 013)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '14',
                'clave' => 'LT01',
                'nombre' => 'Lote 01 (manzana 014)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'manzana_id' => '14',
                'clave' => 'LT02',
                'nombre' => 'Lote 02 (manzana 014)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
        ]);
    }
}
