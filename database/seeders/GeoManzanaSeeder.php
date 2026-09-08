<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoManzanaSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('geo.manzanas')->insert([
            [
                'asentamiento_id' => '1',
                'clave' => 'MZN01',
                'nombre' => 'Manzana 01 (asentamiento 01)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '1',
                'clave' => 'MZN02',
                'nombre' => 'Manzana 02 (asentamiento 01)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '2',
                'clave' => 'MZN01',
                'nombre' => 'Manzana 01 (asentamiento 02)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '2',
                'clave' => 'MZN02',
                'nombre' => 'Manzana 02 (asentamiento 02)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '3',
                'clave' => 'MZN01',
                'nombre' => 'Manzana 01 (asentamiento 03)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '3',
                'clave' => 'MZN02',
                'nombre' => 'Manzana 02 (asentamiento 03)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '4',
                'clave' => 'MZN01',
                'nombre' => 'Manzana 01 (asentamiento 04)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '4',
                'clave' => 'MZN02',
                'nombre' => 'Manzana 02 (asentamiento 04)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '5',
                'clave' => 'MZN01',
                'nombre' => 'Manzana 01 (asentamiento 05)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '5',
                'clave' => 'MZN02',
                'nombre' => 'Manzana 02 (asentamiento 05)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '6',
                'clave' => 'MZN01',
                'nombre' => 'Manzana 01 (asentamiento 06)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '6',
                'clave' => 'MZN02',
                'nombre' => 'Manzana 02 (asentamiento 06)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '7',
                'clave' => 'MZN01',
                'nombre' => 'Manzana 01 (asentamiento 07)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'asentamiento_id' => '7',
                'clave' => 'MZN02',
                'nombre' => 'Manzana 02 (asentamiento 07)',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
        ]);
    }
}
