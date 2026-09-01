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
        Schema::create('expediente.documentos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('expediente_id')
                ->constrained('expediente.expedientes');

            $table->foreignId('documento_id')
                ->constrained('documento.documentos');

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
        Schema::dropIfExists('expediente.documentos');
    }
};
