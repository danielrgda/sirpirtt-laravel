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
        Schema::create('geo.manzanas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asentamiento_id')
                ->constrained('geo.asentamientos');
            $table->string('clave');
            $table->string('nombre');
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes(); 
            
            $table->unique(
                ['asentamiento_id', 'clave'],
                'manzanas_asentamiento_clave_unique'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geo.manzanas');
    }
};
