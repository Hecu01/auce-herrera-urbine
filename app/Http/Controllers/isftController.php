<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App;

class isftController extends Controller
{
    public function index(){
        $carreras = Carrera::all();
        return view('index', compact('carreras'));		
    }
    
    // Crear carrera
    public function cargar_carrera(Request $request){
        $carreraNueva = new Carrera;
        $carreraNueva->carrera = $request->carrera;
        $carreraNueva->años_duracion = $request->anios_duracion;
        $carreraNueva->resolucion = $request->resolucion;
        $carreraNueva->descripcion = $request->descripcion;
        $carreraNueva->save();
        return back()->with('mensaje', 'Carrera Agregada');
   	}
}
