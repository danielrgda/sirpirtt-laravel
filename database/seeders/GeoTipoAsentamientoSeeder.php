<?php

namespace Database\Seeders;

use App\Models\Geo\TipoAsentamiento;
use Illuminate\Database\Seeder;

class GeoTipoAsentamientoSeeder extends Seeder
{
    public function run(): void
    {
        $asentamientos = [
            ['nombre'=>'Colonia'],
            ['nombre'=>'Fraccionamiento'],
            ['nombre'=>'Equipamiento'],
            ['nombre'=>'Unidad habitacional'],
            ['nombre'=>'Zona industrial'],
            ['nombre'=>'Zona militar'],
            ['nombre'=>'Pueblo'],
            ['nombre'=>'Rancho'],
            ['nombre'=>'Ranchería'],
            ['nombre'=>'Aeropuerto'],
            ['nombre'=>'Puerto'],
            ['nombre'=>'Ejido'],
            ['nombre'=>'Barrio'],
            ['nombre'=>'Zona comercial'],
            ['nombre'=>'Condominio'],
            ['nombre'=>'Zona federal'],
        ];

        foreach ($asentamientos as $asentamiento) {
            TipoAsentamiento::create($asentamiento);
        }
    }
}
