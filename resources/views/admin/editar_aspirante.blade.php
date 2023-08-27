<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
    
    <div class="contenedor">
        @if (session('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Enhorabuena! {{ session('mensaje') }}<br>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div  >
            
 
            <form method="POST" action="{{ route('registro.actualizar', $registro->id) }}"    id="form-update" 
                class="container-fluid d-flex" style="justify-content: space-around; align-items:flex-start">

                @method("PUT")
                @csrf
                <style>
                    .article{
                        margin: 5px;
                        padding: 0px;
                        border: 2px solid rgba(175, 175, 175, 0.514);
                        border-radius: 10px;
                    }
                    h4{
                        margin-left: 5px;
                        margin-top: 5px;
                        font-weight: bold;
                    }
                    label{
                        font-weight: 600;
                    }
                    .switches{
                        font-weight: 100; 
                        margin:0; 
                        padding:0;
                    }
                </style>
                <div class=" row">
                    <div  style="width:350px" >
                        <div class="article">
    
                            <div class="container-fluid d-flex justify-content-center" style="height: 200px ;border-radius: 0px; display:flex; justify-content: center;  background:#ffffff">
                                <img src="{{url('foto/'. $registro->foto) }}" style="width: auto " draggable="false">
                            </div>
                            <div class="py-2">
                                <div style="border: none; border-top: 2px solid #c9c9c9; "  >
                                    <div class="form-floating " >

                                        <select class="form-select form-select-sm  btn-danger"   id="carrera_a_estudiar" name="carrera_elegida_aspirante" >
                                            {{-- @foreach( $carreras as $item)
                                                <option value="{{ $item->id }}">{{ $item->descripcion }}</option>
                                            @endforeach  --}}

                                            @foreach ($carreras as $carrera)
                                                <option value="{{ $carrera->id }}" {{ $registro->carrera_id == $carrera->id ? 'selected' : '' }}>
                                                    {{ $carrera->descripcion }}   {{ $registro->carrera_id == $carrera->id ? '(original)' : '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="" style="font-size: 1.1em; padding-left: 6px; color:#fff; opacity: 100;">Carrrera elegida del instituto</label>
                                    </div>
    
                                </div>    

                                <h4 style="margin-top: 5px">Datos personales</h4>
                
                                <div class="d-flex" >
                                    <div class="mx-1">
                                        <label for="">Nombres</label><br>
                                        <input type="text" class="form-control form-control-sm" name="nombre_aspirante" value="{{ $registro->nombre }}">
                                    </div>
                                    
                                    <div class="mx-1">
                                        <label for="">Apellidos</label><br>
                                        <input type="text" class="form-control form-control-sm" name="apellido_aspirante" value="{{ $registro->apellido }}">
                                    </div>
                                </div>
                                <div class="d-flex" >
                                    <div class="mx-1">
                                        <label for="estado-civil"> Estado civil</label>
                                        <input type="text" class="form-control form-control-sm" name="estado_civil_aspirante" value="{{ $registro->est_civil }}">
                                    </div>
                                    <div class="mx-1">
                                        <label for="">Sexo</label><br>
                                        <input type="text" class="form-control form-control-sm" name="sexo_aspirante" value="{{ $registro->sexo }}">
                                    </div>
                                </div>
                                <div class="d-flex" >
                                    <div class="mx-1">
                                        <label for="">DNI</label><br>
                                        <input type="text" class="form-control form-control-sm" name="dni_aspirante" value="{{ $registro->dni }}">
                                    </div>
                                    <div class="mx-1">
                                        <label for="">Cuil</label><br>
                                        <input type="text" class="form-control form-control-sm" name="cuil_aspirante" value="{{ $registro->cuil }}">
                                    </div>
                                </div>
    
                
                            </div>
                            <div style="border: none; border-top: 2px solid #c9c9c9; border-radius: 0px; margin-bottom:10px;">
                                <h4 class=" mt-2">Datos de nacimiento</h4>
                
                                <div class="d-flex" >
                                    <div class="mx-1">
                                        <label for="">Ciudad</label><br>
                                        <input type="text" class="form-control form-control-sm" name="ciudad_nac_aspirante" value="{{ $registro->ciudad }}">
                                    </div>
                                    <div class="mx-1">
                                        <label for="">Provincia</label><br>
                                        <input type="text" class="form-control form-control-sm" name="prov_nac_aspirante" value="{{ $registro->provincia }}">
                                    </div>
                                </div>
                                <div class="d-flex" >
                                    <div class="mx-1">
                                        <label for="estado-civil">Pais</label>
                                        <input type="text" class="form-control form-control-sm" name="pais_nac_aspirante" value="{{ $registro->nacionalidad }}">
                                    </div>
                                    <div class="mx-1">
                                        <label for="">Fecha nacimiento</label><br>
                                        <input type="text" class="form-control form-control-sm" name="fecha_nac_aspirante" value="{{ $registro->fec_nac }}">
                                    </div>
                                </div>
                            </div>
                            

                        </div>
        
                    </div>
                    <div class="article" style="width:350px">
        
                        <div class="  ">

                            <div class="mb-3">
                                <h4 >Datos de residencia</h4>
                
                                <div class="d-flex" >
                                    <div class="mx-1">
                                        <label for="">Domicilio</label><br>
                                        <input type="text" class="form-control form-control-sm" name="domicilio_aspirante" value="{{ $registro->domicilio }}">
                                    </div>
                                    <div class="mx-1">
                                        <label for="">Barrio</label><br>
                                        <input type="text" class="form-control form-control-sm" name="barrio_aspirante" value="{{ $registro->barrio }}">
                                    </div>
                                </div>
                                <div class="d-flex" >
                                    <div class="mx-1">
                                        <label for="estado-civil">Ciudad </label>
                                        <input type="text" class="form-control form-control-sm" name="ciudad_aspirante" value="{{ $registro->ciudad }}">
                                    </div>
                                    <div class="mx-1">
                                        <label for="">Provincia</label><br>
                                        <input type="text" class="form-control form-control-sm" name="provincia_aspirante" value="{{ $registro->provincia }}">
                                    </div>
                                </div>
                                <div class="mx-1">
                                    <label for="">Código Postal</label><br>
                                    <input type="text" class="form-control form-control-sm" name="cod_post_ciud_aspirante" value="{{ $registro->cod_postal }}">
                                </div>
                            </div>
        
                            
                            <div style="border: none; border-top: 2px solid #c9c9c9; border-radius: 0px">
                                <div class="left ml-4 col-12 mb-3">
                                    <h4 >Datos académicos</h4>
                    
                                    <div>
                                        <div class="mx-1">
                                            <label for="">Titulo secundario</label><br>
                                            <input type="text" class="form-control form-control-sm" name="titulo_secundario" value="{{ $registro->titulo_intermedio }}">
                                        </div>
               
                                    </div>
                                    <div>
                                        <div class="mx-1">
                                            <label for="estado-civil">Escuela de egreso</label>
                                            <input type="text" class="form-control form-control-sm" name="escuela_egreso_secundaria" value="{{ $registro->escuela_egreso }}">
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex" >
                                        <div class="mx-1">
                                            <label for="">Año Egreso</label><br>
                                            <input type="text" class="form-control form-control-sm" name="año_egreso_secundaria" value="{{ $registro->año_egreso }}">
                                        </div>
                                        <div class="mx-1">
                                            <label for="estado-civil">Ciudad</label>
                                            <input type="text" class="form-control form-control-sm" name="ciudad_egreso_secundaria" value="{{ $registro->distrito_egreso }}">
                                        </div>
                                        
                                    </div>           
            
                                </div>
                            </div>
                            <div style="border: none; border-top: 2px solid #c9c9c9; border-radius: 0px">
                                <div class="left ml-4 col-12 mb-3">
                                    <h4 >Datos de contacto</h4>
                    
                                    <div class="">
                                        <div class="mx-1">
                                            <label for="">Correo electrónico</label><br>
                                            <input type="text" class="form-control form-control-sm" name="correo_aspirante" value="{{ $registro->email }}">
                                        </div>
               
                                    </div>
                                    <div class="d-flex" >
                                        <div class="mx-1">
                                            <label for="">Celular</label>
                                            <input type="text" class="form-control form-control-sm" name="celular_aspirante" value="{{ $registro->celular }}">
                                        </div>
                                        <div class="mx-1">
                                            <label for="">Tel fijo </label><br>
                                            <input type="text" class="form-control form-control-sm" name="tel_fijo_aspirante" value="{{ $registro->tel_fijo }}">
                                        </div>
                                    </div>
                                    <div class="d-flex" >
                                        <div class="mx-1">
                                            <label for="">Tel alternativo</label>
                                            <input type="text" class="form-control form-control-sm" name="tel_alterno_aspirante" value="{{ $registro->tel_alternativo }}">
                                        </div>
                                        <div class="mx-1">
                                            <label for="">Pertenece a</label><br>
                                            <input type="text" class="form-control form-control-sm" name="tel_alterno_aspirante_pertenece_a" value="{{ $registro->pertenece_a }}">
                                        </div>
                                    </div>           
            
                                </div>
                            </div>
                        </div>
        
                        
                        
                    </div>
                    <div class="" style="width:350px">       
                        <div class="left ml-4 col-12 mb-3 article">
                            <div class="left ml-4 col-12 mb-3">
                                <h4 class="">Preguntas</h4>
                
    
                                <div class="px-1 d-flex" >
                                    <label for="estado-civil">Tiene familiares a cargo: </label>
                                    <div class="form-check form-switch" style="margin: 2px 0px 0px 4px">
                                        @if($registro->fam_a_cargo == true)
                                            <input class="form-check-input" name="fam_a_cargo" type="checkbox" id="familia_a_cargo" checked>
                                            <label for="" class="switches"  id="si_familia_a_cargo">SÍ (original)</label>
                                            <label for="" class="switches"  id="no_familia_a_cargo" style="display: none">NO</label>

                                        @else
                                            <input class="form-check-input" name="fam_a_cargo" type="checkbox" id="familia_a_cargo" >
                                            <label for="" class="switches"  id="si_familia_a_cargo" style="display: none">SÍ </label>
                                            <label for="" class="switches" id="no_familia_a_cargo">NO (original)</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="px-1 d-flex" >
                                    <label for="estado-civil">Tiene hijos: </label>
                                    <div class="form-check form-switch" style="margin: 2px 0px 0px 4px">
                                        @if($registro->hijos == true)
                                            <input class="form-check-input" name="tiene_hijos" type="checkbox" id="tiene_hijos" checked>
                                            <label for="" class="switches"  id="si_tiene_hijos">SÍ (original)</label>
                                            <label for="" class="switches"  id="no_tiene_hijos" style="display: none">NO</label>

                                        @else
                                            <input class="form-check-input" name="tiene_hijos" type="checkbox" id="tiene_hijos" >
                                            <label for="" class="switches"  id="si_tiene_hijos" style="display: none">SÍ </label>
                                            <label for="" class="switches" id="no_tiene_hijos">NO (original)</label>
                                        @endif
                                    </div>                                    
                                </div>

                                <div class="px-1 d-flex " >
                                    <label for="estado-civil">Obra social: </label>
                                    <div class="form-check form-switch" style="margin: 2px 0px 0px 4px">
                                        @if($registro->obra_social == true)
                                            <input class="form-check-input" name="obra_social" type="checkbox" id="obraSocial" checked>
                                            <label for="" class="switches"  id="si_obraSocial">SÍ (original)</label>
                                            <label for="" class="switches"  id="no_obraSocial" style="display: none">NO</label>

                                        @else
                                            <input class="form-check-input" name="obra_social" type="checkbox" id="obraSocial" >
                                            <label for="" class="switches"  id="si_obraSocial" style="display: none">SÍ </label>
                                            <label for="" class="switches" id="no_obraSocial">NO (original)</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="mx-1 d-flex" >

                                    <label for="estado-civil">Trabaja: </label>
                                    <div class="form-check form-switch" style="margin: 2px 0px 0px 4px;  ">
                                        @if($registro->trabaja == true)
                                            <input class="form-check-input" name="trabaja" type="checkbox" id="trabaja" checked>
                                            <label for="" class="switches"  class="switches"  id="si_trabaja">SÍ (original)</label>
                                            <label for="" class="switches"  id="no_trabaja" style="display: none">NO</label>

                                        @else
                                            <input class="form-check-input" name="trabaja" type="checkbox" id="trabaja" >
                                            <label for="" class="switches"  id="si_trabaja" style="display: none">SÍ </label>
                                            <label for="" class="switches" id="no_trabaja">NO (original)</label>
                                        @endif
                                    </div>

                                    
                                </div>

                                @if($registro->trabaja == true)

                                    <div id="horarios_trabajo" class="mx-1" style="display: block">
                                        <div >
                                            <label for="act" >Actividad en el trabajo</label>
                                            <input type="text" class="form-control" name="rol_trabajo" id="act" value="{{ $registro->actividad_trabajo}}">
                                        </div>
                                        <div class="">
                                            <label for="act" >Horarios de trabajo</label>
                                            <textarea name="horarios" class="mb-2 form-control form-control-sm" id="descripcion_carr"  placeholder='Detallá los horarios de trabajo. Si son horarios fijos, basta con ingresar "De (horario de entrada) a (horario de salida)". (Por Ejemplo: de 8 a 16hs)' style="height:75px">{{ $registro->horario_trabajo}}</textarea>
                                        </div>
                                    </div>
                                @else
                                    <div id="horarios_trabajo" class="mx-1" style="display: none">
                                    <div id="horarios_trabajo" class="mx-1" >
                                        <div >
                                            <label for="act" >Actividad en el trabajo</label>
                                            <input type="text" class="form-control" name="rol_trabajo" id="act" >
                                        </div>
                                        <div class="">
                                            <label for="act" >Horarios de trabajo</label>
                                            <textarea name="horarios_rotativos_asp" class="mb-2 form-control form-control-sm" id="descripcion_carr"  placeholder='Detallá los horarios de trabajo. Si son horarios fijos, basta con ingresar "De (horario de entrada) a (horario de salida)". (Por Ejemplo: de 8 a 16hs)' style="height:75px">{{ $registro }}</textarea>
                                        </div>
                                    </div>
                                @else
                                    <div id="horarios_trabajo" class="mx-1" >
                                        <div >
                                            <label for="act" >Actividad en el trabajo</label>
                                            <input type="text" class="form-control" name="rol_trabajo" id="act" value="{{ $registro->actividad_trabajo}}">
                                        </div>
                                        <div class="">
                                            <label for="act" >Horarios de trabajo</label>
                                            <textarea name="horarios" class="mb-2 form-control form-control-sm" id="descripcion_carr"  placeholder='Detallá los horarios de trabajo. Si son horarios fijos, basta con ingresar "De (horario de entrada) a (horario de salida)". (Por Ejemplo: de 8 a 16hs)' style="height:75px">{{ $registro->horario_trabajo}}</textarea>
                                        </div>
                                    </div>
                                @endif
                                
                            </div>
                               

                            {{-- <div class="" style="border: none; border-top: 2px solid #c9c9c9; border-radius: 0px; margin-bottom:10px;">
                                <div class="left ml-4 col-12 mb-3">
                                    <h4 class="mt-1 p-1">Estudios Adicionales (1)</h4>
                    
                                    <div>
                                        <div class="mx-1">
                                            <label for="">Titulo</label><br>
                                            <input type="text" class="form-control form-control-sm" name="titulo_otro_estudio1" value="{{ $registro->otro_estudio}}">
                                        </div>
               
                                    </div>
                                    <div>
                                        <div class="mx-1">
                                            <label for="estado-civil">Instituto de egreso</label>
                                            <input type="text" class="form-control form-control-sm" name="instituto_otro_estudio1" value="{{ $registro->otro_estudio_inst }}">
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex" >
                                        <div class="mx-1">
                                            <label for="">Año Egreso</label><br>
                                            <input type="text" class="form-control form-control-sm " name="ciudad_egreso_otro_estudio1" value="{{ $registro->otro_estudio_egreso }}">
                                        </div>
                                        <div class="mx-1">
                                            <label for="estado-civil">Ciudad</label>
                                            <input type="text" class="form-control form-control-sm" name="año_egreso_otro_estudio1" value="{{ $registro->otro_estudio_egreso_dist }}">
                                        </div>
                                        
                                    </div>           
            
                                </div>
                            </div>
                            <div class="" style="border: none; border-top: 2px solid #c9c9c9; border-radius: 0px; margin-bottom:10px;">
                                <div class="left ml-4 col-12 mb-3">
                                    <h4 class="mt-1 p-1">Estudios Adicionales (2)</h4>
                    
                                    <div>
                                        <div class="mx-1">
                                            <label for="">Titulo</label><br>
                                            <input type="text" class="form-control form-control-sm" name="titulo_otro_estudio2" value="{{ $registro->otro_estudio2 }}">
                                        </div>
               
                                    </div>
                                    <div>
                                        <div class="mx-1">
                                            <label for="estado-civil">Instituto de egreso</label>
                                            <input type="text" class="form-control form-control-sm" name="instituto_otro_estudio2" value="{{ $registro->otro_estudio_inst2 }}">
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex" >
                                        <div class="mx-1">
                                            <label for="">Año Egreso</label><br>
                                            <input type="text" class="form-control form-control-sm" name="año_egreso_otro_estudio2" value="{{ $registro->otro_estudio_egreso2 }}">
                                        </div>
                                        <div class="mx-1">
                                            <label for="estado-civil">Ciudad</label>
                                            <input type="text" class="form-control form-control-sm" name="ciudad_egreso_otro_estudio2" value="{{ $registro->otro_estudio_egreso_dist2 }}">
                                        </div>
                                        
                                    </div>           
            
                                </div>
                            </div>  --}}
                        </div>
                    </div>

                </div>
                <div >
                    <nav class="d-flex " style="justify-content: flex-end">
                        <li class="nav-item dropdown" style="list-style: none">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-success" style=" display:flex; justify-content: flex-end; color:#fff;"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Admin: {{ Auth::user()->name }}
                           </a>
         
                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>
         
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>
                           </div>
                       </li>
         
                     </nav>

                    <h2>Editar registro: {{ $registro->id }}</h2>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('ir_admin') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </form>

        </div>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    
    <script src="js/main.js"></script>     
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        $(document).ready(function() {
            $("#obraSocial").change(function() {
                if (this.checked) {
                    $("#si_obraSocial").show();
                    $("#no_obraSocial").hide();
                } else {
                
                    $("#no_obraSocial").show();
                    $("#si_obraSocial").hide();
                }
            });

            $("#trabaja").change(function() {
                if (this.checked) {
                    $("#si_trabaja").show();
                    $("#horarios_trabajo").show();
                    $("#no_trabaja").hide();
                    
                } else {
                    $("#no_trabaja").show();
                    $("#si_trabaja").hide();
                    $("#horarios_trabajo").hide();
                }
            });
            $("#familia_a_cargo").change(function() {
                if (this.checked) {
                    $("#si_familia_a_cargo").show();
                    $("#no_familia_a_cargo").hide();
                } else {
                    $("#si_familia_a_cargo").hide();
                    $("#no_familia_a_cargo").show();
                }
            });

            $("#tiene_hijos").change(function() {
                if (this.checked) {
                    $("#si_tiene_hijos").show();
                    $("#no_tiene_hijos").hide();
                } else {
                    $("#si_tiene_hijos").hide();
                    $("#no_tiene_hijos").show();
                }
            });
        });
        
    </script>

</body>
</html>