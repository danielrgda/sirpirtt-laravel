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
        Schema::create('dashboard.municipios', function (Blueprint $table) {
            $table->foreignId('municipio_id')
                ->primary()
                ->constrained('geo.municipios');

            $table->integer('popup_posx');
            $table->integer('popup_posy');
            $table->string('path');
            $table->boolean('popup_direction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboard.municipios');
    }
};
