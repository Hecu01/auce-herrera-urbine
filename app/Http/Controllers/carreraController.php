<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App;

class carreraController extends Controller
{
    // Crear gorra
    public function store(Request $request){
        $carreraNueva = new Carrera;
        $carreraNueva->carrera = $request->carrera;
        $carreraNueva->años_duracion = $request->años_duracion;
        $carreraNueva->resolucion = $request->resolucion;
        $carreraNueva->descripcion = $request->descripcion;
        $carreraNueva->asignaturas = $request->asignaturas;

        $carreraNueva->save();
        return back();
    }
}
