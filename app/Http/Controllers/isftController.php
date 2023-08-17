<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Asignatura;
use App\Models\Registro;
use App\Models\Prueba;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use App;
use App\Models\ConcatenatedData;

class isftController extends Controller
{
    public function index(){
        $carreras = Carrera::all();
        $registros = Registro::all();
        return view('index', compact('carreras', 'registros'));     
    }    
    public function prueba(){
        $pruebas = Prueba::all();
        return view('prueba', compact('pruebas'));     
    }
    public function guardar_prueba(Request $request){
        $pruebaNuevo = new Prueba;      
        //$path = $request->file('foto_aspirante')->store('public/imagenes');

        $path = $request->file('foto_aspirante')->getClientOriginalName();
        $ruta = storage_path() . '\app\public\imagenes/' . $path;
        Image::make($request->file('foto_aspirante'));

        $pruebaNuevo->foto = $path;
        $pruebaNuevo->save();
        


        // Obtener la URL pública de la imagen
        $url = Storage::url($path);
        return back()->with('mensaje', 'Prueba');
    }




    // Inscripción
    public function guardar(Request $request){
        $registroNuevo = new Registro;
        /*Todos las columnas
            id	X
            nombre	X
            apellido	X
            sexo	X
            dni	X
            cuil	X
            email	X
            est_civil	X

            domicilio	X
            barrio	X
            ciudad	X
            provincia	X
            cod_postal	X

            fec_nac	X
            lug_nac	X
            prov_nac X
            nacionalidad X

            celular	X
            tel_fijo X	
            tel_alternativo	X
            pertenece_a	X

            titulo_intermedio X
            año_egreso	X
            escuela_egreso X
            distrito_egreso	X

            hijos X
            fam_a_cargo	X
            carrera_id	X

            trabaja	X
            actividad_trabajo	X
            horario_trabajo	
            obra_social	X

            otro_estudio	X
            otro_estudio_inst	X
            otro_estudio_egreso_dist X
            otro_estudio_egreso X

            otro_estudio2	X
            otro_estudio_inst2	X
            otro_estudio_egreso_dist2 X
            otro_estudio_egreso2	X
            
            fotoc_dni	
            titulo	
            certificado

            foto X
            
            visado_por	
            fotoc_dni_ok	
            fotoc_titulo_ok	
            certificado_sec_ok	
            foto_ok	
            partida_nac_ok	
            created_at	
            updated_at	*/ 
            
        // Datos personales[1/5]
        if($request->hasFile('foto_aspirante')){
			$file = $request->file('foto_aspirante');
			$carpetaDestino = storage_path('img/fotos/');
			$filename = time() . '-' . $file->getClientOriginalName();
			$uploadSuccess = $request->file('foto_aspirante')->move($carpetaDestino, $filename);
			$registroNuevo->foto = $carpetaDestino . $filename;
		}
        $request->file('foto_aspirante')->store('img/fotos/', 'local');
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
        /*
        $tit_op1 = $request->input('titulo_otro_estudio1');
        $inst_tit_op1 = $request->input('instituto_otro_estudio1');
        $ciudad_tit_op1 = $request->input('ciudad_egreso_otro_estudio1');
        $año_tit_op1 = $request->input('titulo_otro_estudio1');
        if(strlen($tit_op1) > 2 && strlen())
        */
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
        
        return view('ver_aspirante')->with('registro', $registro);
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
    	return view('editar_aspirante',compact('registro', 'carreras'));

	}

    public function update(Request $request, $id){
		$registro = Registro::findOrFail($id);
		$registro-> nombre = $request->nombres;
		$registro-> apellido = $request->apellidos;
        $registro-> est_civil = $request->estado_civil;
		$registro-> sexo = $request->sexo;
		$registro-> dni = $request->dni;
		$registro-> cuil = $request->cuil;

		$registro->save();
		return back()->with('mensaje', 'registro actualizada');
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
