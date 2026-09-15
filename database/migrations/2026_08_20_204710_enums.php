<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            DO $$
            BEGIN
                IF NOT EXISTS (
                    SELECT 1
                    FROM pg_type
                    WHERE typname = 'estado_verificacion_enum'
                ) THEN
                    CREATE TYPE estado_verificacion_enum AS ENUM (
                        'pendiente',
                        'aprobado',
                        'rechazado'
                    );
                END IF;
            END
            $$;
        ");
        DB::statement("
            DO $$
            BEGIN
                IF NOT EXISTS (
                    SELECT 1
                    FROM pg_type
                    WHERE typname = 'entidades_enum'
                ) THEN
                    CREATE TYPE entidades_enum AS ENUM (
                        'solicitante',
                        'lote',
                        'expediente'
                    );
                END IF;
            END
            $$;
        ");

        
    }

    public function down(): void
    {
        DB::statement('DROP TYPE IF EXISTS estado_verificacion_enum CASCADE');
        DB::statement('DROP TYPE IF EXISTS entidades_enum CASCADE');
        
    }
};
