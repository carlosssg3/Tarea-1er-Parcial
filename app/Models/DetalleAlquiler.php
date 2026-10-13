<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleAlquiler extends Model
{
    protected $table = 'detalle_alquileres';

    protected $fillable = ['alquiler_id', 'equipo_id', 'cantidad'];

    public function alquiler()
    {
        return $this->belongsTo(Alquiler::class, 'alquiler_id');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }
}