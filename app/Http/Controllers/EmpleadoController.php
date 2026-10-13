<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        dd($empleados);
    }

    // Relación hasMany: alquileres registrados por un empleado
    public function alquileres($id)
    {
        $empleado = Empleado::findOrFail($id);
        $alquileres = $empleado->alquileres;
        dd($alquileres);
    }

    public function conAlquileres()
    {
        $empleados = Empleado::with('alquileres')->get();
        dd($empleados);
    }
}