<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = ['codigo', 'nombre_completo', 'telefono', 'correo', 'cargo'];

    public function alquileres()
    {
        return $this->hasMany(Alquiler::class, 'empleado_id');
    }
}