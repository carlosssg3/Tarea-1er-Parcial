```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 30)->unique();
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->string('marca', 100)->nullable();
            $table->decimal('precio_dia', 10, 2);
            $table->string('estado', 30)->default('disponible');

            $table->foreignId('categoria_id')
                ->constrained('categorias')
                ->restrictOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};