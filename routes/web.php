<?php
/*
|--------------------------------------------------------------------------
| Proyecto realizado por: 
| - Herrera Guillermo
| - Auce Ailen
| - Valentin Urbine
|--------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\isftController;


// Rutas principales
Route::get('/', [isftController::class, 'index'])->name('home');
Route::get('/prueba', [isftController::class, 'prueba'])->name('prueba');
Route::get('/registro/{id}', [isftController::class, 'mostrar_datos'])->name('mostrarDatosAspirante');
Route::post('/guardar', [isftController::class, 'guardar'])->name('registrar');
Route::post('/probar', [isftController::class, 'guardar_prueba'])->name('probar');


Route::delete('/eliminar-registro/{id}', [isftController::class, 'eliminar'])->name('');

// Rutas autenticadas
Route::middleware(['auth'])->group(function(){
    Route::get('/administrador', [isftController::class, 'admin'])->name('ir_admin');
    Route::delete('/eliminar-registro/{id}', [isftController::class, 'eliminar'])->name('registro.eliminar');
    Route::get('/editar-registro/{id}', [isftController::class, 'editar'])->name('registro.editar');
    Route::put('/editar-registro/{id}', [isftController::class, 'update'])->name('registro.actualizar');
});


// Route::post('/home', [isftController::class, 'cargar_carrera'])->name('cargar.carrera');
// Route::post('/home2', [isftController::class, 'cargar_asignatura'])->name('cargar.asignatura');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('foto/{filename}', function ($filename){
    $path = storage_path('fotos/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});
