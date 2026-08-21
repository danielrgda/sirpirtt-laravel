<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('CREATE SCHEMA IF NOT EXISTS auth');
        DB::statement('CREATE SCHEMA IF NOT EXISTS geo');
        DB::statement('CREATE SCHEMA IF NOT EXISTS lote');
        DB::statement('CREATE SCHEMA IF NOT EXISTS documento');
        DB::statement('CREATE SCHEMA IF NOT EXISTS solicitante');
        DB::statement('CREATE SCHEMA IF NOT EXISTS expediente');
        DB::statement('CREATE SCHEMA IF NOT EXISTS dashboard');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP SCHEMA IF EXISTS dashboard CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS expediente CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS solicitante CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS documento CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS lote CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS geo CASCADE');
        DB::statement('DROP SCHEMA IF EXISTS auth CASCADE');
    }
};
