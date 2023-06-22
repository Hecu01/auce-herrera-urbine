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
Route::post('/home', [isftController::class, 'cargar_carrera'])->name('cargar.carrera');
Route::post('/home2', [isftController::class, 'cargar_asignatura'])->name('cargar.asignatura');