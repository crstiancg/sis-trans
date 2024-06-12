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
        Schema::create('tucs', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_expedicion');
            $table->date('fecha_vencimento');
            $table->text('observacion');
            $table->foreignId('padron_id')->constrained()->onDelete('cascade');
            $table->foreignId('vehiculo_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tucs');
    }
};
