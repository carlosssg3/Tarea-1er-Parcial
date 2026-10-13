<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;

class AlquilerController extends Controller
{
    public function index()
    {
        $alquileres = Alquiler::all();
        dd($alquileres);
    }

    // Relación belongsTo: cliente de un alquiler
    public function cliente($id)
    {
        $alquiler = Alquiler::findOrFail($id);
        $cliente = $alquiler->cliente;
        dd($cliente);
    }

    // Relación belongsTo: empleado que registró el alquiler
    public function empleado($id)
    {
        $alquiler = Alquiler::findOrFail($id);
        $empleado = $alquiler->empleado;
        dd($empleado);
    }

    // Relación hasMany: detalles de un alquiler
    public function detalles($id)
    {
        $alquiler = Alquiler::findOrFail($id);
        $detalles = $alquiler->detalles;
        dd($detalles);
    }

    // Todo junto con with()
    public function completo()
    {
        $alquileres = Alquiler::with(['cliente', 'empleado', 'detalles.equipo'])->get();
        dd($alquileres);
    }
}