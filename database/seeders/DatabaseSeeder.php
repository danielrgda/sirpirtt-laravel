<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GeoEstadoSeeder::class,
            GeoMunicipioSeeder::class,
            GeoTipoLocalidadSeeder::class,
            GeoTipoAsentamientoSeeder::class,
            GeoLocalidadSeeder::class,
            GeoAsentamientoSeeder::class,
            GeoManzanaSeeder::class,
            LoteLoteSeeder::class, 
            DocumentoCatalogoSeeder::class,
            DocumentoTipoSeeder::class,
            DocumentoRequisitoSeeder::class,
            SolicitanteSolicitanteSeeder::class,
            ExpedienteTipoSeeder::class,
            ExpedienteEstadoSeeder::class,
            ExpedienteExpedienteSeeder::class,
            DocumentoDocumentoSeeder::class,
            DashboardMunicipioSeeder::class,
        ]);
    }
}
