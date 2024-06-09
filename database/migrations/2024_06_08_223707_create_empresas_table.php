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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('ruc');
            $table->string('rsocial');
            $table->string('direccion');
            $table->string('registro');
            $table->string('acta');
            $table->string('escritura');

            $table->foreignId('tipo_vehiculo_id')->constrained()->onDelete('cascade');
            $table->foreignId('tipo_servicio_id')->constrained()->onDelete('cascade');
            $table->foreignId('ruta_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
