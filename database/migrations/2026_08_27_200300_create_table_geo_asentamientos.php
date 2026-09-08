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
        Schema::create('geo.asentamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('localidad_id')
                ->constrained('geo.localidades');
            $table->string('nombre');
            $table->integer('codigo_postal');
            $table->boolean('is_active')->default(true);
            $table->foreignId('tipo_asentamiento_id')
                ->constrained('geo.tipos_asentamientos');

            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geo.asentamientos');
    }
};
