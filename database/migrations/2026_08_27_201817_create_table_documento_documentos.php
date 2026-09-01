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
        Schema::create('documento.documentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_id')
                ->constrained('documento.tipos');
            $table->string('nombre_archivo');
            $table->string('url');
            $table->string('mime');
            $table->bigInteger('size_bytes');
            $table->string('sha256');
            $table->string('estado_verificacion')
                ->default('pendiente');
            $table->string('comentarios_verificacion')->nullable();
            $table->string('notas')->nullable();
            $table->boolean('is_active')->default(true);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento.documentos');
    }
};
