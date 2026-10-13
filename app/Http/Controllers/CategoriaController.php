<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        dd($categorias);
    }

    // Relación hasMany: equipos de una categoría
    public function equipos($id)
    {
        $categoria = Categoria::findOrFail($id);
        $equipos = $categoria->equipos;
        dd($equipos);
    }

    // Categorías con sus equipos usando with()
    public function conEquipos()
    {
        $categorias = Categoria::with('equipos')->get();
        dd($categorias);
    }
}