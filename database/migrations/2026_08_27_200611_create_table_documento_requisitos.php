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
        Schema::create('documento.requisitos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_id')
                ->constrained('documento.tipos');
            $table->foreignId('catalogo_id')
                ->constrained('documento.catalogos');
            $table->boolean('es_obligatorio')->default(false);
            $table->boolean('es_unico')->default(false);
            $table->integer('vigencia')->nullable();
            
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(
                ['tipo_id', 'catalogo_id'],
                'documento_requisito_tipo_catalogo_unique'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento.requisitos');
    }
};
