```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detalle_alquileres', function (Blueprint $table) {
            $table->id();

            $table->foreignId('alquiler_id')
                ->constrained('alquileres')
                ->cascadeOnDelete();

            $table->foreignId('equipo_id')
                ->constrained('equipos')
                ->restrictOnDelete();

            $table->unsignedInteger('cantidad');
            $table->decimal('precio_dia', 10, 2);

            $table->timestamps();

            $table->unique(['alquiler_id', 'equipo_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detalle_alquileres');
    }
};