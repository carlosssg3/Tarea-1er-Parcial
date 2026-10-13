<?php

namespace App\Http\Controllers;

use App\Models\DetalleAlquiler;

class DetalleAlquilerController extends Controller
{
    public function index()
    {
        $detalles = DetalleAlquiler::all();
        dd($detalles);
    }

    // Relaciones belongsTo: alquiler y equipo de un detalle
    public function relaciones($id)
    {
        $detalle = DetalleAlquiler::findOrFail($id);
        $alquiler = $detalle->alquiler;
        $equipo = $detalle->equipo;
        dd($detalle, $alquiler, $equipo);
    }

    public function conRelaciones()
    {
        $detalles = DetalleAlquiler::with(['alquiler', 'equipo'])->get();
        dd($detalles);
    }
}