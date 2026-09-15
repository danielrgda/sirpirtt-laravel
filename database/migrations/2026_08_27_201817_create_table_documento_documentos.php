<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documento.documentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requisito_id')
                ->constrained('documento.requisitos');
            $table->bigInteger('entidad_id');
            $table->string('nombre_archivo');
            $table->string('url');
            $table->string('mime');
            $table->bigInteger('size_bytes');
            $table->string('sha256');
            $table->string('comentarios_verificacion')->nullable();
            $table->string('notas')->nullable();
            $table->boolean('is_active')->default(true);
            
            $table->timestamps();
            $table->softDeletes();

        });
        DB::statement("
            ALTER TABLE documento.documentos
            ADD COLUMN estado_verificacion estado_verificacion_enum NOT NULL DEFAULT 'pendiente'
        ");
        DB::statement("
            ALTER TABLE documento.documentos
            ADD COLUMN entidad entidades_enum NOT NULL
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("
            DROP TYPE IF EXISTS estado_verificacion
        ");
        Schema::dropIfExists('documento.documentos');
    }
};
