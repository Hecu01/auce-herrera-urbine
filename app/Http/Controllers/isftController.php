<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Asignatura;
use App\Models\Registro;
use App;

class isftController extends Controller
{
    public function index(){
        $carreras = Carrera::all();
        return view('index', compact('carreras'));		
    }
    // Inscripción
    public function inscripcion(Request $request){
        $registroNuevo = new Registro;
        
        // Datos personales input - col


        /*
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
        pertenece_a	

        titulo_intermedio X
        año_egreso	X
        escuela_egreso X
        distrito_egreso	X

        hijos X
        fam_a_cargo	X
        carrera_id	
        trabaja	
        actividad_trabajo	
        horario_trabajo	
        obra_social	

        otro_estudio	
        otro_estudio_inst	
        otro_estudio_egreso

        otro_estudio2	
        otro_estudio_inst2	
        otro_estudio_egreso2	
        
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
        updated_at	
        */
        // Datos personales[1/5]
        if($request->hasFile('foto')){
			$file = $request->file('foto');
			$carpetaDestino = 'img/foto/';
			$filename = time() . '-' . $file->getClientOriginalName();
			$uploadSuccess = $request->file('foto')->move($carpetaDestino, $filename);
			$registroNuevo->foto_aspirante = $carpetaDestino . $filename;
		}
        $registroNuevo->nombre_aspirante = $request->nombre;
        $registroNuevo->apellido_aspirante = $request->apellido;        
        $registroNuevo->estado_civil_aspirante = $request->est_civil;   
        $registroNuevo->sexo_aspirante = $request->sexo;  
        $registroNuevo->dni_aspirante = $request->dni;   
        $registroNuevo->cuil_aspirante = $request->cuil;         
        
        // Datos Nacimiento [2/5]
        $registroNuevo->ciudad_nac_aspirante = $request->lug_nac;
        $registroNuevo->prov_nac_aspirante = $request->prov_nac;
        $registroNuevo->pais_nac_aspirante = $request->nacionalidad; 
        $registroNuevo->fecha_nac_aspirante = $request->fec_nac;         
        
        // Datos de residencia [3/5]
        $registroNuevo->domicilio_aspirante = $request->domicilio;
        $registroNuevo->barrio_aspirante = $request->barrio;
        $registroNuevo->ciudad_aspirante = $request->ciudad; 
        $registroNuevo->provincia_aspirante = $request->provincia;  
        $registroNuevo->cod_post_ciud_aspirante = $request->cod_postal;         
        
        // Datos de contactos [4/5]
        $registroNuevo->correo_aspirante = $request->email;
        $registroNuevo->celular_aspirante = $request->celular;
        $registroNuevo->tel_fijo_aspirante = $request->tel_fijo;
        $registroNuevo->tel_alterno_aspirante = $request->tel_alternativo;
        $registroNuevo->tel_alterno_aspirante_pertenece_a = $request->pertenece_a;
        
        // Algunas preguntas [5/5]
        $registroNuevo->aspirante_tiene_hijos = $request->hijos;
        $registroNuevo->fam_a_cargo_aspirante = $request->fam_a_cargo;
        $registroNuevo->carrera_elejida_aspirante = $request->carrera_id;


        // Datos académicos [1/1]
        $registroNuevo->titulo_secundario = $request->titulo_intermedio;
        $registroNuevo->escuela_egreso_secundaria = $request->escuela_egreso;
        $registroNuevo->año_egreso_secundaria = $request->año_egreso;
        $registroNuevo->ciudad_egreso_secundaria = $request->distrito_egreso;

        // Titulo opcional - 1
        $registroNuevo->titulo_otro_estudio1 = $request->;
        $registroNuevo-> = $request->;
        $registroNuevo-> = $request->;
        $registroNuevo-> = $request->;

        // Titulo opcional - 2

        $registroNuevo->save();
        return back()->with('mensaje', 'inscripcion Agregada');
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
