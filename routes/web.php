<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inicio','/layouts/app');
// Route::view('/clientes','/clientes/listado');
// Route::view('/admin/formulario','/administradores/registro');
// Route::view('/admin/listado','/administradores/listado');
// Route::view('/info-producto','/productos/detalle');


Route::get('/admin/listado', [AdministradorController::class, 'listar']);
Route::get('/admin/crear',[AdministradorController::class, 'vistaFormulario']);
Route::get('/admin/guardar',[AdministradorController::class, 'registrar']);
Route::get('/admin/editar',[AdministradorController::class, 'vistaEdicion']);
Route::put('/admin/actualizar',[AdministradorController::class, 'actualizar']);
Route::get('/admin/mostrar',[AdministradorController::class, 'vistaMostrar']);
Route::delete('/admin/borrar',[AdministradorController::class, 'borrar']);
