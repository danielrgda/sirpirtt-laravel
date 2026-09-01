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
        Schema::create('expediente.expedientes', function (Blueprint $table) {
            $table->id();

            $table->string('clave_expediente');
            $table->foreignId('solicitante_id')
                ->constrained('solicitante.solicitantes');
            $table->foreignId('lote_id')
                ->constrained('lote.lotes');
            $table->foreignId('tipo_id')
                ->constrained('expediente.tipos');
            $table->foreignId('estado_id')
                ->constrained('expediente.estados');

            $table->integer('anio');
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['anio', 'clave_expediente']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expediente.expedientes');
    }
};
