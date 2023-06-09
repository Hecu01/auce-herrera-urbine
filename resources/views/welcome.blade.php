<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->
		<link rel="stylesheet" href="css/style.css">
    </head>
    <body class="antialiased">
        <div class="container">

            <h1>formulario de inscripcon</h1>
            <nav>
                <a href="#" class="btn" style="background: rgba(101, 84, 255, 0.322);">DATOS PERSONALES</a>
                <a href="#" class="btn" style="background: rgba(101, 84, 255, 0.322);">DATOS ACADÉMICOS</a>
                <a href="#" class="btn" style="background: rgba(101, 84, 255, 0.322);">FINALIZAR</a>
            </nav>
            <form class=""style="background:rgba(101, 84, 255, 0.322); " >
                <h3 style="padding: 12px; padding-bottom: 0px;">Datos Personales</h3>
                <div class="view" style="display:flex; justify-content:center">
                    <div class="row" style="display:flex; justify-content:center">
        
                        <div action="" class="form-control m-3" style="border: 1px solid #0000003f; width:335px">
                            <div class="" style="display: flex; justify-content: space-between; align-items:center;">
            
                                <label class="custom-file-upload" style="text-align:center; margin:0px 30px; margin-right:20px;">
                                    <input type="file" class="btn btn-secondary" name="gorra" onchange="previewImage(event, '#imgPreview')" required>
                                    Subir foto
                                </label>
                                <div class="container d-flex justify-content-center" style="height: 130px;width:130px;  display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#fff">
                                    <a href="#" type="button">
                                        
                                        <img id="imgPreview" style="height: 130px; width:130px;">

                                    </a>
                                </div>
            
            
                                
                            </div>
                            
                            <div class="d-flex mt-2">
                                <div class="mx-1">
                                    <label for="nombres">Nombre/s</label>
                                    <input required class="form-control" id="nombres" type="text" >
                                </div>
                                <div class="mx-1">
                                    <label for="apellidos">Apellido/s</label>
                                    <input required class="form-control mb-2" id="apellidos" type="text" >
                                </div>
                            </div>
        
                            <div class="d-flex my-3">
                                <div class="mx-1  col-5" >
                                    <select name="" id="sexo" class="form-control" >
                                        <option value="" selected hidden>Elija su Sexo</option>
                                        <option value="" >Masculino</option>
                                        <option value="" >Femenino</option>
                                        <option value="" >No binario</option>
                                    </select>
                                </div>
                                <div class="mx-1">
                                    <input required class="form-control " type="number" placeholder=" CUIL">
                                </div>
                            </div>
                            <div class="my-3 mx-1">

                                <input required class="form-control " type="number" placeholder="DNI ">
                            </div>
                            {{-- <div class="d-grid mt-2">
                                <button class="btn btn-primary">INSCRIBIRME</button>
                            </div>          --}}
                            <div class="d-flex col-12 my-2">
                                <label for="" class="d-block col-5 mt-2">Fecha Nacimiento</label>
                                <input required type="date" name="" class="form-control" id="">
                            </div>
                        </div>
{{--             
                        <div action="" class="form-control m-3" style="border: 1px solid #0000003f; width:335px">
        
                            <input required type="text" name="" class="form-control my-2" placeholder="Lugar Nacimiento">
                           
                            <input required type="text" name="" class="form-control" placeholder="Provincia Nacimiento">
        

                            <div class="my-2 mb-3 d-flex justify-content-center">
                                <div class="col-4 mx-2 mt-1">
                                    <label for="" class=""><strong>Nacionalidad: </strong></label>
                                </div>
                                <div class="col-6 ">
                                    <input required type="text" class="form-control" name="nacionalidad">
                                </div>
                            </div>
                            <div class="mt-2">
                                <input required type="text" class="col-4" placeholder="Domicilio">
                                <input required type="text" class="col-3" placeholder="Barrio">
                                <input required type="text" class="col-4" placeholder="Ciudad">
                            </div>
                            <select name="" id="" class="my-2">
                                <option value=""selected hidden>Elija su Provincia</option>
                                <option value="">Buenos Aires</option>
                                <option value="">Santiago del estero</option>
                                <option value="">Santa fe</option>
                                <option value="">Entre Ríos</option>
                            </select>
                            <input required type="text" class="d-inline col-4" placeholder="Código Postal">
                            
                            <input required class="form-control mt-2" type="email" placeholder="Ingrese Correo Electrónico">
                            <input required class="form-control mt-2" type="email" placeholder="Vuelva a ingresar Correo Electrónico">
                        </div>
               
                        <div action="" class="form-control m-3" style="border: 1px solid #0000003f; width:345px">
                            <div class="mb-2">
                                <select name="" id=" "class="form-control ">
                                    <option value="" selected hidden>Elija su estado Civil</option>
                                    <option value="">Soltero</option>
                                    <option value="">Casado</option>
                                    <option value="">Prefiero no decirlo</option>
                                    
                                </select>
        
                            </div>
                            <label for="" class="">¿Tiene Hijos?: </label>
                            <label for="">Sí</label>
                            <input required type="radio" name="respuesta_hijos" id="">
                            <label for="">No</label>
                            <input required type="radio" name="respuesta_hijos" id="">
        
                            <label for="">¿Tiene familiares a cargo?</label>
                            <label for="">Sí</label>
                            <input required type="radio" name="familiares_a_cargo" id="">
                            <label for="">No</label>
                            <input required type="radio" name="familiares_a_cargo" id="">
        
                            <div class="mt-2">
                                <input required type="text" class="col-4" placeholder="Teléfono Fijo">
                                <input required type="text" class="col-3" placeholder="Celular">
                                <input required type="text" class="col-4" placeholder="Tel alternativo">
                            </div>
                            

                            <select name="" id="" class="form-control mt-3">
                                <option value=""selected hidden>Elija la carrera</option>
                                <option value="">TS - Analista de sistemas</option>
                                <option value="">TS - Recursos Humanos</option>
                                <option value="">TS - Sistemas de Inform. Contable</option>
                                <option value="">TS - Mantenimiento industrial</option>
                                <option value="">TS - Logistica</option>
                            </select>
                        </div>
        
                        <h2 class="mt-5">DATOS ACADÉMICOS</h2>
                        <div action="" class="form-control mx-3" style="border: 1px solid #0000003f; width:355px">
                            <input type="text" name="" class="form-control mb-1"placeholder="Titulo Intermedio" id="">
                            <div>
        
                            </div>
                            <input type="numbre" name="" class="form-control mb-1"placeholder="Año de Egreso" id="">
                            <input type="numbre" name="" class="form-control mb-1"placeholder="Escuela de egreso" id="">
                            <input type="numbre" name="" class="form-control mb-1"placeholder="Año de Egreso" id="">
                        </div> --}}
        
        
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>



<script>

	function previewImage(event, querySelector){

		//Recuperamos el input que desencadeno la acción
		const input = event.target;

		//Recuperamos la etiqueta img donde cargaremos la imagen
		$imgPreview = document.querySelector(querySelector);

		// Verificamos si existe una imagen seleccionada
		if(!input.files.length) return

		//Recuperamos el archivo subido
		file = input.files[0];

		//Creamos la url
		objectURL = URL.createObjectURL(file);

		//Modificamos el atributo src de la etiqueta img
		$imgPreview.src = objectURL;
				
	}
</script>
