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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nplaca');
            $table->string('motor');
            $table->string('serie');
            $table->string('nasiento');
            $table->string('npuerta');
            $table->string('añofabriacion');
            $table->string('constancia');
            $table->string('capacidad');
            $table->string('color');

            $table->foreignId('propietario_id')->constrained()->onDelete('cascade');
            $table->foreignId('modelo_id')->constrained()->onDelete('cascade');
            $table->foreignId('empresa_id')->constrained()->onDelete('cascade');
            $table->foreignId('marca_id')->constrained()->onDelete('cascade');
            $table->foreignId('tipo_vehiculo_id')->constrained()->onDelete('cascade');
            $table->foreignId('tipo_carroceria_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
