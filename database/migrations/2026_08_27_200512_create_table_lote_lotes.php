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
        Schema::create('lote.lotes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('manzana_id')
                ->constrained('geo.manzanas');

            $table->string('clave');
            $table->string('nombre');
            $table->string('clave_catastral');

            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();

            $table->index('nombre');
            $table->index('clave');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lote.lotes');
    }
};
