<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\isftController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [isftController::class, 'index'])->name('home');
Route::get('/pregistro.eliminarrueba', [isftController::class, 'prueba'])->name('prueba');
Route::get('/registro/{id}', [isftController::class, 'mostrar_datos'])->name('mostrarDatosAspirante');
Route::post('/guardar', [isftController::class, 'guardar'])->name('registrar');
Route::post('/probar', [isftController::class, 'guardar_prueba'])->name('probar');

Route::delete('/eliminar-registro/{id}', [isftController::class, 'eliminar'])->name('');

Route::get('/editar-registro/{id}', [isftController::class, 'editar'])->name('registro.editar');
Route::put('/editar-registro/{id}', [isftController::class, 'update'])->name('registro.actualizar');
// Route::post('/home', [isftController::class, 'cargar_carrera'])->name('cargar.carrera');
// Route::post('/home2', [isftController::class, 'cargar_asignatura'])->name('cargar.asignatura');