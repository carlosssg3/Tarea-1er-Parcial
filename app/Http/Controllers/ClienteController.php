<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        dd($clientes);
    }

    // Relación hasMany: alquileres de un cliente
    public function alquileres($id)
    {
        $cliente = Cliente::findOrFail($id);
        $alquileres = $cliente->alquileres;
        dd($alquileres);
    }

    public function conAlquileres()
    {
        $clientes = Cliente::with('alquileres')->get();
        dd($clientes);
    }
}