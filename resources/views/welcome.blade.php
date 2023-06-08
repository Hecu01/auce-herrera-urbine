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
            <div class="row">

                <form action="" class="form-control" style="border: 1px solid #0000003f; width:355px">
                    <div class="" style="display: flex; justify-content: space-between; align-items:center;">
    
    
                        <label class="custom-file-upload" style="width:160px; margin-right:30px;">
                            <input type="file" class="btn btn-secondary" name="gorra" onchange="previewImage(event, '#imgPreview')" required>
                            Subir foto
                        </label>
                        <div class="container d-flex justify-content-center" style="height: 130px; width:130px: display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#fff">
                            <a href="#" type="button" >
                                
                                <img id="imgPreview" style="height: 100%; width:100%;">
                            </a>
                        </div>
    
                        
                    </div>
                    
                    <label for="">Nombre/s</label>
                    <input class="form-control" type="text">
                    <label for="">Apellido/s</label>
                    <input class="form-control mb-2" type="text">
                    
                    <div class="d-block m-auto">
                        <label for=""><strong>Sexo</strong>:</label>
                        <label for="">Masculino</label>
                        <input type="radio" name="sexo" id="">
        
                        <label for="">Femenino</label>
                        <input  type="radio" name="sexo" id="">
                        
                        <label for="">Otro</label>
                        <input type="radio" name="sexo" id=""><br>
                    </div>
    
                    <select name="" id="" class="form-control my-2">
                        <option value=""selected hidden>Lugar de nacimiento</option>
                        <option value="">San Nicolas, Buenos Aires.</option>
                        <option value="">Ramallo, Buenos Aires.</option>
                        <option value="">Rosario, Santa fe.</option>
                        <option value="">Villa Constitucion, Santa fe.</option>
                    </select>
                    <input class="form-control mt-2" type="text" placeholder="DNI (12.345.678)">
                    <div class="d-grid mt-2">
                        <button class="btn btn-primary">INSCRIBIRME</button>
                    </div>
    
                </form>
    
                <form action="" class="form-control mx-3" style="border: 1px solid #0000003f; width:355px">

                    <input class="form-control mt-2" type="text" placeholder="CUIL (20-12.345.678-1)">
                    <div class="d-flex col-12 mt-2 mb-2">
                        <label for="" class="d-block col-5 mt-2">Fecha Nacimiento</label>
                        <input type="date" name="" class="form-control" id="">
                    </div>
                    
                  
    
                </form>
    
                <form action="" class="form-control" style="border: 1px solid #0000003f; width:355px">
                    <div class="" style="display: flex; justify-content: space-between; align-items:center;">
    
    
                        <label class="custom-file-upload" style="width:160px; margin-right:30px;">
                            <input type="file" class="btn btn-secondary" name="gorra" onchange="previewImage(event, '#imgPreview')" required>
                            Subir foto
                        </label>
                        <div class="container d-flex justify-content-center" style="height: 130px; width:130px: display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#fff">
                            <a href="#" type="button" >
                                
                                <img id="imgPreview" style="height: 100%; width:100%;">
                            </a>
                        </div>
    
                        
                    </div>
                    
                    <label for="">Nombre/s</label>
                    <input class="form-control" type="text">
                    <label for="">Apellido/s</label>
                    <input class="form-control mb-2" type="text">
                    
                    <div class="d-block m-auto">
                        <label for=""><strong>Sexo</strong>:</label>
                        <label for="">Masculino</label>
                        <input type="radio" name="sexo" id="">
        
                        <label for="">Femenino</label>
                        <input  type="radio" name="sexo" id="">
                        
                        <label for="">Otro</label>
                        <input type="radio" name="sexo" id=""><br>
                    </div>
    
                    <select name="" id="" class="form-control mt-2">
                        <option value=""selected hidden>Lugar de nacimiento</option>
                        <option value="">San Nicolas, Buenos Aires.</option>
                        <option value="">Ramallo, Buenos Aires.</option>
                        <option value="">Rosario, Santa fe.</option>
                        <option value="">Villa Constitucion, Santa fe.</option>
                    </select>

    
                </form>
            </div>
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
