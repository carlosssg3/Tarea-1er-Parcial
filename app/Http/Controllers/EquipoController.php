<?php

namespace App\Http\Controllers;

use App\Models\Equipo;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        dd($equipos);
    }

    // Relación belongsTo: categoría de un equipo
    public function categoria($id)
    {
        $equipo = Equipo::findOrFail($id);
        $categoria = $equipo->categoria;
        dd($categoria);
    }

    // Relación hasMany: detalles de alquiler donde aparece un equipo
    public function detalles($id)
    {
        $equipo = Equipo::findOrFail($id);
        $detalles = $equipo->detalles;
        dd($detalles);
    }

    public function conCategoria()
    {
        $equipos = Equipo::with('categoria')->get();
        dd($equipos);
    }
}