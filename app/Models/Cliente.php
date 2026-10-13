<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['codigo', 'nombre_completo', 'telefono', 'correo', 'direccion'];

    public function alquileres()
    {
        return $this->hasMany(Alquiler::class, 'cliente_id');
    }
}