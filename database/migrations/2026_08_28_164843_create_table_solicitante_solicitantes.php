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
        Schema::create('solicitante.solicitantes', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('curp');

            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();

            $table->unique([
                'nombre',
                'apellido_p',
                'apellido_m',
                'curp'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitante.solicitantes');
    }
};
