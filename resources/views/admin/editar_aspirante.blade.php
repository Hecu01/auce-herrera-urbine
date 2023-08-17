<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    <div class="contenedor">

        <h2 style="text-align: center">Editar registro: {{ $registro->id }}</h2>
        <div class="mr-4" style="width:200px; margin:auto; margin-bottom:10px;">
            <div >
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('home') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <form method="POST"  class="mr-3 row"  id="form-update" >
                
                @method("PUT")
                @csrf
                <style>
                    .article{
                        margin: 10px;
                        border: 1px solid rgba(175, 175, 175, 0.514);
                        border-radius: 10px;
                    }
                </style>
                <div  style="width:300px">
                    <div class="article">

                        <div class="container-fluid d-flex justify-content-center" style="border-radius: 10px;width:200px: display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#000">
                            <img src="../{{ $registro->foto }}" style="width: 100%; " draggable="false">
                        </div>
                        <div class="left ml-4 col-12 mb-3 ">
                            <h4 class="mt-1" style="text-align: ">Datos personales</h4>
            
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="">Nombres</label><br>
                                    <input type="text" class="form-control" name="nombres" value="{{ $registro->nombre }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Apellidos</label><br>
                                    <input type="text" class="form-control" name="apellidos" value="{{ $registro->apellido }}">
                                </div>
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="estado-civil">Estado civil</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Sexo</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="">DNI</label><br>
                                    <input type="number" class="form-control" name="dni" value="{{ $registro->dni }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Cuil</label><br>
                                    <input type="text" class="form-control" name="cuil" value="{{ $registro->cuil }}">
                                </div>
                            </div>
        
                            {{-- <div class="d-flex mt-1">
                                <div class="">
                                    <label for="">DNI</label><br>
                                    <input type="number" class="form-control " name="precio" value="{{ $registro->dni }}">
                                </div>
            
                            </div> --}}
            
                        </div>
                    </div>
    
                </div>
                <div class="" style="width:300px">
    
                    <div class="left  col-12 mb-3  ">
                        <div class="article py-2">
                            <h4 class=" p-1">Datos de nacimiento</h4>
            
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="">Ciudad</label><br>
                                    <input type="text" class="form-control" name="nombres" value="{{ $registro->nombre }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Provincia</label><br>
                                    <input type="text" class="form-control" name="apellidos" value="{{ $registro->apellido }}">
                                </div>
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="estado-civil">Pais</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Fecha</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
                            </div>
                        </div>
    
                        <div class="article my-2 py-2">
                            <h4 class=" p-1">Datos de residencia</h4>
            
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="">Domicilio</label><br>
                                    <input type="text" class="form-control" name="nombres" value="{{ $registro->nombre }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Barrio</label><br>
                                    <input type="text" class="form-control" name="apellidos" value="{{ $registro->apellido }}">
                                </div>
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="estado-civil">Ciudad</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Provincia</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
                            </div>
                            <div class="mx-1">
                                <label for="">Código Postal</label><br>
                                <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                            </div>
                        </div>
    
      
                    </div>
    
                </div>
                <div class="" style="width:300px">
    
                    <div class="left ml-4 col-12 mb-3 article">
                        <div class="left ml-4 col-12 mb-3">
                            <h4 class="mt-1 p-1">Datos de contacto</h4>
            
                            <div class="">
                                <div class="mx-1">
                                    <label for="">Correo electrónico</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
       
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="estado-civil">Celular</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Tel fijo</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="estado-civil">Tel alternativo</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                <div class="mx-1">
                                    <label for="">Pertenece a</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
                            </div>           
    
                        </div>
                    </div>
    
                    <div class="left ml-4 col-12 mb-3 article">
                        <div class="left ml-4 col-12 mb-3">
                            <h4 class="mt-1 p-1">Preguntas</h4>
            

                            <div class="mx-1">
                                <label for="estado-civil"><strong>Tiene familiares a cargo: </strong></label>
                                <label for="">SÍ</label>
                                <input type="radio" name="" value="Si" id="">
                                <label for="">NO</label>
                                <input type="radio" name="" value="No" id="">
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="estado-civil"><strong>Tiene hijos: </strong></label>
                                    <label for="">SÍ</label>
                                    <input type="radio" name="" value="Si" id="">
                                    <label for="">NO</label>
                                    <input type="radio" name="" value="No" id="">
                                </div>
                                
                            </div>
                            <div class="form-floating " >
                                <select class="form-select mt-2"  id="carrera_a_estudiar" name="carrera_elejida_aspirante"  aria-label="Floating label select example">
                                    <option value="Default" selected hidden>Elija la carrera</option>
                                    @foreach( $carreras as $item)
                                        <option value="{{ $item->id }}">{{ $item->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="carrera_a_estudiar">Carrrera elegida</label>
                            </div>
                
                            <div class="mx-1 mt-2">
                                <label for="estado-civil"><strong>Obra social: </strong></label>
                                <label for="">SÍ</label>
                                <input type="radio" name="" value="Si" id="">
                                <label for="">NO</label>
                                <input type="radio" name="" value="No" id="">
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="estado-civil"><strong>Trabaja: </strong></label>
                                    <label for="">SÍ</label>
                                    <input type="radio" name="" value="Si" id="">
                                    <label for="">NO</label>
                                    <input type="radio" name="" value="No" id="">
                                </div>
                                
                            </div>
                            <div class="">
                                                        <div class="mx-1">
                            <textarea name="horarios_rotativos_asp" class="my-2 form-control" id="descripcion_carr" rows="4" placeholder="Detallá tus horarios." style="height:100px"></textarea>
                        </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="" style="width:300px">
    
                    <div class="left ml-4 col-12 mb-3 article">
                        <div class="left ml-4 col-12 mb-3">
                            <h4 class="mt-1 p-1">Datos académicos</h4>
            
                            <div>
                                <div class="mx-1">
                                    <label for="">Titulo secundario</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
       
                            </div>
                            <div>
                                <div class="mx-1">
                                    <label for="estado-civil">Escuela de egreso</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="">Año Egreso</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
                                <div class="mx-1">
                                    <label for="estado-civil">Ciudad</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                
                            </div>           
    
                        </div>
                    </div>
    
                    <div class="left ml-4 col-12 mb-3 article">
                        <div class="left ml-4 col-12 mb-3">
                            <h4 class="mt-1 p-1">Estudios Adicionales (1)</h4>
            
                            <div>
                                <div class="mx-1">
                                    <label for="">Titulo</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
       
                            </div>
                            <div>
                                <div class="mx-1">
                                    <label for="estado-civil">Instituto de egreso</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="">Año Egreso</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
                                <div class="mx-1">
                                    <label for="estado-civil">Ciudad</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                
                            </div>           
    
                        </div>
                    </div>
                    <div class="left ml-4 col-12 mb-3 article">
                        <div class="left ml-4 col-12 mb-3">
                            <h4 class="mt-1 p-1">Estudios Adicionales (2)</h4>
            
                            <div>
                                <div class="mx-1">
                                    <label for="">Titulo</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
       
                            </div>
                            <div>
                                <div class="mx-1">
                                    <label for="estado-civil">Instituto de egreso</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                
                            </div>
                            <div class="d-flex" >
                                <div class="mx-1">
                                    <label for="">Año Egreso</label><br>
                                    <input type="text" class="form-control" name="sexo" value="{{ $registro->sexo }}">
                                </div>
                                <div class="mx-1">
                                    <label for="estado-civil">Ciudad</label>
                                    <input type="text" class="form-control" name="estado_civil" value="{{ $registro->est_civil }}">
                                </div>
                                
                            </div>           
    
                        </div>
                    </div>
    
                </div>
    
    
            </form>
        </div>
        @if (session('mensaje'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Enhorabuena!</strong> {{ session('mensaje') }}<br>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</body>
</html>