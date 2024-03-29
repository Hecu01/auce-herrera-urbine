<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Carrera;
use App\Models\Asignatura;
use App\Models\Registro;
use App\Models\Prueba;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App;

use DataTables; 
use App\Models\ConcatenatedData;

class isftController extends Controller
{
    public function index(){
        $carreras = Carrera::all();
        $registros = Registro::all();
        return view('index', compact('carreras', 'registros'));     
    }
    public function admin(Request $request){
        // if($request->ajax()){
        //     $registros_ajax = DB::select('select * from registros');
        //     return DataTables::of($registros_ajax)
        //             ->addColumn('action', function($registros_ajax){
        //                 $acciones = '<a href="#" class="btn btn-success btn-sm"  title="Editar"> Editar <i class="fa-solid fa-pen-to-square"></i> </a>;'
        //                 $acciones .= '<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{$registro->id}}">Eliminar <i class="fa-solid fa-trash"></i></button>'
        //                 return $acciones;
        //             })
        //             ->rawColumns(['actions'])
        //             ->make(true);
        // }


        $carreras = Carrera::all();
        $registros = Registro::all();
        return view('admin/admin', compact('carreras', 'registros'));     
    }    

    public function check_fotoc_dni(Request $request, $id){
        
        $registro = Registro::find($id);
        if (!$registro){
            abort(404); 
        }// ISO 1207: ESTANDAR PARA LOS PROCESOS DE CICLO DE VIDA DEL SOFTWARE (NO ESPECIFICA QUE SEA LO UNICO O LO NECESARIO)
        $entrega = $request->has('valor_booleano');
        if ($entrega) {
            $entrega_fotocopia = 1;
            $registro->fotoc_dni_ok =  $entrega_fotocopia;
        } else {
            $entrega_fotocopia = 0;
            $registro->fotoc_dni_ok = $entrega_fotocopia;
        }
        $registro->save();

        return redirect()->back(); // Redirige de vuelta a la página anterior
    }
    public function check_fotoc_titulo(Request $request, $id){
        
        $registro = Registro::find($id);
        if (!$registro){
            abort(404); 
        }// ISO 1207: ESTANDAR PARA LOS PROCESOS DE CICLO DE VIDA DEL SOFTWARE (NO ESPECIFICA QUE SEA LO UNICO O LO NECESARIO)
        $entrega2 = $request->has('valor_booleano2');
        if ($entrega2) {
            $entrega_fotocopia2 = 1;
            $registro->fotoc_titulo_ok =  $entrega_fotocopia2;
        } else {
            $entrega_fotocopia2 = 0;
            $registro->fotoc_titulo_ok = $entrega_fotocopia2;
        }
        $registro->save();

        return redirect()->back(); // Redirige de vuelta a la página anterior
    }
    public function check_certif_secund(Request $request, $id){
        $registro = Registro::find($id);
        if (!$registro){
            abort(404); 
        }
        $entrega3 = $request->has('valor_booleano3');
        if ($entrega3) {
            $entrega_fotocopia3 = 1;
            $registro->certificado_sec_ok =  $entrega_fotocopia3;
        } else {
            $entrega_fotocopia3 = 0;
            $registro->certificado_sec_ok = $entrega_fotocopia3;
        }
        $registro->save();
        return redirect()->back(); // Redirige de vuelta a la página anterior
    }
    public function check_foto(Request $request, $id){
        $registro = Registro::find($id);
        if (!$registro){
            abort(404); 
        }
        $entrega4 = $request->has('valor_booleano4');
        if ($entrega4) {
            $entrega_fotocopia4 = 1;
            $registro->foto_ok =  $entrega_fotocopia4;
        } else {
            $entrega_fotocopia4 = 0;
            $registro->foto_ok = $entrega_fotocopia4;
        }
        $registro->save();
        return redirect()->back(); // Redirige de vuelta a la página anterior
    }
    public function check_part_nac(Request $request, $id){
        $registro = Registro::find($id);
        if (!$registro){
            abort(404); 
        }
        $entrega5 = $request->has('valor_booleano5');
        if ($entrega5) {
            $entrega_fotocopia5 = 1;
            $registro->partida_nac_ok =  $entrega_fotocopia5;
        } else {
            $entrega_fotocopia5 = 0;
            $registro->partida_nac_ok = $entrega_fotocopia5;
        }
        $registro->save();
        return redirect()->back(); // Redirige de vuelta a la página anterior
    }
    public function prueba(){

        $pruebas = Prueba::all();
        return view('prueba', compact('pruebas'));     
    }

    // Inscripción
    public function guardar(Request $request){
        $registroNuevo = new Registro;
        // Datos personales[1/5]
        if($request->hasFile('foto_aspirante')){
			$file = $request->file('foto_aspirante');
			$carpetaDestino = storage_path('fotos');
			$filename = $file->getClientOriginalName();
			$uploadSuccess = $request->file('foto_aspirante')->move($carpetaDestino, $filename);
			$registroNuevo->foto = $filename;
		}
        $registroNuevo->nombre = $request->nombre_aspirante;
        $registroNuevo->apellido = $request->apellido_aspirante;        
        $registroNuevo->est_civil = $request->estado_civil_aspirante;   
        $registroNuevo->sexo = $request->sexo_aspirante;  
        $registroNuevo->dni = $request->dni_aspirante;   
        $registroNuevo->cuil = $request->cuil_aspirante;         
        
        // Datos Nacimiento [2/5]
        $registroNuevo->lug_nac = $request->ciudad_nac_aspirante;
        $registroNuevo->prov_nac = $request->prov_nac_aspirante;
        $registroNuevo->nacionalidad = $request->pais_nac_aspirante; 
        $registroNuevo->fec_nac = $request->fecha_nac_aspirante;         
        
        // Datos de residencia [3/5]
        $registroNuevo->domicilio = $request->domicilio_aspirante;
        $registroNuevo->barrio = $request->barrio_aspirante;
        $registroNuevo->ciudad = $request->ciudad_aspirante; 
        $registroNuevo->provincia = $request->provincia_aspirante;  
        $registroNuevo->cod_postal = $request->cod_post_ciud_aspirante;         
        
        // Datos de contactos [4/5]
        $registroNuevo->email = $request->correo_aspirante;
        $registroNuevo->celular = $request->celular_aspirante;
        $registroNuevo->tel_fijo = $request->tel_fijo_aspirante;
        $registroNuevo->tel_alternativo = $request->tel_alterno_aspirante;
        $registroNuevo->pertenece_a = $request->tel_alterno_aspirante_pertenece_a;
        
        // Algunas preguntas [5/5]
        $registroNuevo->hijos = $request->aspirante_tiene_hijos;
        $registroNuevo->fam_a_cargo = $request->fam_a_cargo_aspirante;
        $registroNuevo->carrera_id = $request->carrera_elejida_aspirante;

        // Datos académicos [1/1]
        $registroNuevo->titulo_intermedio = $request->titulo_secundario;
        $registroNuevo->escuela_egreso = $request->escuela_egreso_secundaria;
        $registroNuevo->año_egreso = $request->año_egreso_secundaria;
        $registroNuevo->distrito_egreso = $request->ciudad_egreso_secundaria;

        // Titulo opcional - 1
        $registroNuevo->otro_estudio = $request->titulo_otro_estudio1;
        $registroNuevo->otro_estudio_inst = $request->instituto_otro_estudio1;
        $registroNuevo->otro_estudio_egreso_dist = $request->ciudad_egreso_otro_estudio1;
        $registroNuevo->otro_estudio_egreso = $request->año_egreso_otro_estudio1;

        // Titulo opcional - 2
        $registroNuevo->otro_estudio2 = $request->titulo_otro_estudio2;
        $registroNuevo->otro_estudio_inst2 = $request->instituto_otro_estudio2;
        $registroNuevo->otro_estudio_egreso_dist2 = $request->ciudad_egreso_otro_estudio2;
        $registroNuevo->otro_estudio_egreso2 = $request->año_egreso_otro_estudio2;
        
        // Último - Datos laborales
        $registroNuevo->obra_social = $request->aspirante_obra_social;
        $registroNuevo->trabaja = $request->aspirante_trabaja;
        $registroNuevo->actividad_trabajo = $request->rol_trabajo;

        $turnos_rotativos = $request->input('turnos_rotativos');
        if($turnos_rotativos === '1'){
            $registroNuevo->horario_trabajo = $request->horarios_rotativos_asp;
        } else{
            $entrada = $request->input('entrada');
            $salida = $request->input('salida');
            $horarios_fijos =  'De ' . $entrada . ' a ' . $salida . ' hs.';
            $registroNuevo->horario_trabajo = $horarios_fijos;
        }
        $registroNuevo->save();
        return back()->with('mensaje', 'Te inscribiste con éxito.');
   	}

    public function mostrar_datos($id){
        $registro = Registro::find($id);
        $carreras = Carrera::all();
        return view('admin/ver_aspirante', compact('carreras'))->with('registro', $registro);
    }
	// Eliminar
	public function eliminar($id){
		$registroEliminar = Registro::findOrFail($id);
		$registroEliminar->delete();
		return back()->with('mensaje2', 'Registro eliminado');
	}
	// editar
	public function editar ($id){
        $carreras = Carrera::all();
		$registro = Registro::findOrFail($id);
    	return view('admin/editar_aspirante',compact('registro', 'carreras'));
        
        // $registro = TuModelo::find($id);
        $opcionesSelect = ['opcion1', 'opcion2', 'opcion3']; // Aquí debes obtener las opciones disponibles desde tu base de datos
        return view('tu_vista_de_edicion', compact('registro', 'opcionesSelect'));


	}

    public function update(Request $request, $id){
        // Datos Nacimiento [1/5]
		$registro = Registro::findOrFail($id);
		$registro->nombre = $request->nombre_aspirante;
		$registro-> apellido = $request->apellido_aspirante;
        $registro-> est_civil = $request->estado_civil_aspirante;
		$registro-> sexo = $request->sexo_aspirante;
		$registro-> dni = $request->dni_aspirante;
		$registro-> cuil = $request->cuil_aspirante;

        // Datos Nacimiento [2/5]
        $registro->lug_nac = $request->ciudad_nac_aspirante;
        $registro->prov_nac = $request->prov_nac_aspirante;
        $registro->nacionalidad = $request->pais_nac_aspirante; 
        $registro->fec_nac = $request->fecha_nac_aspirante;         
        
        // Datos de residencia [3/5]
        $registro->domicilio = $request->domicilio_aspirante;
        $registro->barrio = $request->barrio_aspirante;
        $registro->ciudad = $request->ciudad_aspirante; 
        $registro->provincia = $request->provincia_aspirante;  
        $registro->cod_postal = $request->cod_post_ciud_aspirante;         
        
        // Datos de contactos [4/5]
        $registro->email = $request->correo_aspirante;
        $registro->celular = $request->celular_aspirante;
        $registro->tel_fijo = $request->tel_fijo_aspirante;
        $registro->tel_alternativo = $request->tel_alterno_aspirante;
        $registro->pertenece_a = $request->tel_alterno_aspirante_pertenece_a;
        

        // Datos académicos [1/1]
        $registro->titulo_intermedio = $request->titulo_secundario;
        $registro->escuela_egreso = $request->escuela_egreso_secundaria;
        $registro->año_egreso = $request->año_egreso_secundaria;
        $registro->distrito_egreso = $request->ciudad_egreso_secundaria;
        $registro->carrera_id = $request->carrera_elegida_aspirante;


        // Titulo opcional - 1
        $registro->otro_estudio = $request->titulo_otro_estudio1;
        $registro->otro_estudio_inst = $request->instituto_otro_estudio1;
        $registro->otro_estudio_egreso_dist = $request->ciudad_egreso_otro_estudio1;
        $registro->otro_estudio_egreso = $request->año_egreso_otro_estudio1;

        // Titulo opcional - 2
        $registro->otro_estudio2 = $request->titulo_otro_estudio2;
        $registro->otro_estudio_inst2 = $request->instituto_otro_estudio2;
        $registro->otro_estudio_egreso_dist2 = $request->ciudad_egreso_otro_estudio2;
        $registro->otro_estudio_egreso2 = $request->año_egreso_otro_estudio2;
        // Preguntas
        $tiene_fam_cargo = $request->has('fam_a_cargo');
        if ($tiene_fam_cargo) {
            $fam_cargo = 1;
            $registro->fam_a_cargo = $fam_cargo;
        } else {
            $fam_cargo = 0;
            $registro->fam_a_cargo = $fam_cargo;
        }
        $tiene_hijos_update = $request->has('tiene_hijos');
        if ($tiene_hijos_update) {
            $hijos = 1;
            $registro->hijos = $hijos;
        } else {
            $hijos = 0;
            $registro->hijos = $hijos;
        }

        $tiene_obra_social = $request->has('obra_social');
        if ($tiene_obra_social) {
            $obraSocial = 1;
            $registro->obra_social = $obraSocial;
        } else {
            $obraSocial = 0;
            $registro->obra_social = $obraSocial;
        }
        $trabaja_update = $request->has('trabaja');
        if ($trabaja_update) {
            $trabaja = 1;
            $registro->trabaja = $trabaja;
            $registro->actividad_trabajo = $request->rol_trabajo;
            $registro->horario_trabajo = $request->horarios;
            
        } else {
            $trabaja = 0;
            $rol = '';
            $horarios = '';
            $registro->trabaja = $trabaja;
            $registro->actividad_trabajo = $rol;
            $registro->horario_trabajo = $horarios;
        }
		$registro->save();

        return back()->with('mensaje', 'registro actualizado');
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
    // Crear asignatura
    public function cargar_asignatura(Request $request){
        $asignaturaNueva = new Asignatura;
        $asignaturaNueva->id_carrera = $request->id_carrera;
        $asignaturaNueva->asignatura = $request->asignatura;
        $asignaturaNueva->año = $request->año;
        $asignaturaNueva->save();
        return back()->with('mensaje_asignatura', 'Nueva Asignatura');
    }
}
