´´´php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alquileres', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cliente_id')
                ->constrained('clientes')
                ->restrictOnDelete();

            $table->foreignId('empleado_id')
                ->constrained('empleados')
                ->restrictOnDelete();

            $table->date('fecha_solicitud');
            $table->date('fecha_inicio');
            $table->date('fecha_finalizacion');
            $table->string('estado', 30)->default('pendiente');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alquileres');
    }
};