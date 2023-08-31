<?php
/*
|--------------------------------------------------------------------------
| Proyecto realizado por: 
| - Herrera Guillermo
| - Auce Ailen
| - Urbine Valentin 
fotoc_dni_ok
fotoc_titulo_op
certificado_sec_ok
foto_ok
|--------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\isftController;


// Rutas principales
Route::get('/', [isftController::class, 'index'])->name('inscripcion');
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

    Route::put('/agregar_cambio/{id}', [isftController::class, 'check_fotoc_dni'] )->name('check.fotoc.dni');
    Route::put('/agregar_cambio2/{id}', [isftController::class, 'check_fotoc_titulo'] )->name('check.fotoc.titulo');
    Route::put('/agregar_cambio3/{id}', [isftController::class, 'check_certif_secund'] )->name('check.certif.secund');
    Route::put('/agregar_cambio4/{id}', [isftController::class, 'check_foto'] )->name('check.foto');
    
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
