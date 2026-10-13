<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleAlquilerController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Categorías
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias-con-equipos', [CategoriaController::class, 'conEquipos']);
Route::get('/categorias/{id}/equipos', [CategoriaController::class, 'equipos']);

// Clientes
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes-con-alquileres', [ClienteController::class, 'conAlquileres']);
Route::get('/clientes/{id}/alquileres', [ClienteController::class, 'alquileres']);

// Empleados
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados-con-alquileres', [EmpleadoController::class, 'conAlquileres']);
Route::get('/empleados/{id}/alquileres', [EmpleadoController::class, 'alquileres']);

// Equipos
Route::get('/equipos', [EquipoController::class, 'index']);
Route::get('/equipos-con-categoria', [EquipoController::class, 'conCategoria']);
Route::get('/equipos/{id}/categoria', [EquipoController::class, 'categoria']);
Route::get('/equipos/{id}/detalles', [EquipoController::class, 'detalles']);

// Alquileres
Route::get('/alquileres', [AlquilerController::class, 'index']);
Route::get('/alquileres-completo', [AlquilerController::class, 'completo']);
Route::get('/alquileres/{id}/cliente', [AlquilerController::class, 'cliente']);
Route::get('/alquileres/{id}/empleado', [AlquilerController::class, 'empleado']);
Route::get('/alquileres/{id}/detalles', [AlquilerController::class, 'detalles']);

// Detalle de alquileres
Route::get('/detalle-alquileres', [DetalleAlquilerController::class, 'index']);
Route::get('/detalle-alquileres-con-relaciones', [DetalleAlquilerController::class, 'conRelaciones']);
Route::get('/detalle-alquileres/{id}/relaciones', [DetalleAlquilerController::class, 'relaciones']);