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
        Schema::create('auth.logs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->text('action');
            $table->string('ip_address')->nullable();
            $table->string('request_id')->nullable();
            $table->jsonb('metadata')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
            
            $table->foreign('user_id')
                ->references('id')
                ->on('auth.usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth.logs');
    }
};
