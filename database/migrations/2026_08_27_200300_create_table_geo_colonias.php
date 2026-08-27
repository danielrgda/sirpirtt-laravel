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
        Schema::create('geo.colonias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('localidad_id')
                ->constrained('geo.localidades');
            $table->string('clave')->unique();
            $table->string('nombre');
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
        Schema::dropIfExists('geo.colonias');
    }
};
