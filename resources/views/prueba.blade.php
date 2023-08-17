<!DOCTYPE html>
<html lang="en">
	<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" type="image/png" href="{{ asset('/img/logo1.png') }}">
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <meta name="author" content="3° Año Análisis de Sistemas">

      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Styles -->
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="js/main2.js"></script>  
		<title>Pruebas</title>
	</head>
	<body>
        @if (session('mensaje'))
	        <div class="alert alert-success alert-dismissible fade show" role="alert">
	           <strong>Atención!</strong> {{ session('mensaje') }}
	           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	        </div>
    	@endif



		@foreach( $pruebas as $prueba)
			<p>{{ $prueba->foto }}</p>
			<img src="{{ asset($prueba->foto) }}" alt="Imagen">
		@endforeach



		<form id="form_wrapper" class="form_wrapper" enctype="multipart/form-data"  method="POST" action="{{ route('probar') }}">
			@csrf
			<div class="register0 active en-comun ">
			    <header class="mb-3 d-flex" style="justify-content: space-between; position: relative;">
			        <h4 >
			            Datos personales [1/5] 
			        </h4>
			        <div class="" style="position: relative;">
			            <img src="img/logo1.png" alt="logo isft38"  draggable="false" style="position: absolute; right: -17px; width: 45px; bottom:-15px">
			        </div>
			    </header>
			    <div class="progress" style="width: 90%; margin: auto; margin-bottom: 10px; height: 20px;">                        
			        <div class="progress-bar" style="width:10%; ">
			            <span class="progress-bar-text">0%</span>
			        </div>
			    </div>
			    
			    <div class="mx-3">
			        <div class="" style="display: flex; justify-content: space-between; align-items:center; position: relative;">
			            
			            <label class="custom-file-upload" style="text-align:center; margin:0px 30px; margin-right:20px;">
			                <input type="file" id="foto-aspirante" class="btn btn-secondary" name="foto_aspirante" onchange="previewImage(event, '#imgPreview')" >
			                Subir foto
			            </label>
			            <div class="container d-flex justify-content-center" style="height: 130px;width:130px;  display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#fff">
			                <a href="#" type="button">
			                    <img id="imgPreview" style="height: 130px; width:130px;">
			                </a>
			            </div>
			            <span style="font-size: 0.67em;position: absolute; left:15.4em;top: 12.2em; color:grey;text-align:center" >Foto 4x4 de el/la aspirante</span>
			                    
			        </div>

					{{-- 
			        <h5 class="mt-3 mx-2">Datos personales</h5>
			        <div class="d-flex mt-2 ">
			            <div class="form-floating mb-2 mx-1" >
			                <input type="text" class="form-control"   name="nombre_aspirante" id="nombres"  placeholder="nombre aspirante">
			                <label for="nombres" >Nombres (*)</label>
			            </div>
			            <div class="form-floating mb-2 mx-1" >
			                <input type="text" class="form-control" name="apellido_aspirante"  id="apellidos"  placeholder="Apellido Aspirante">
			                <label for="apellidos" >Apellidos (*)</label>
			            </div>
			        </div>
			        
			        <div class="d-flex justify-content-center my-3 mt-1 " style="width:100%;">

			            <div class="form-floating mx-1" style="width: 50%">
			                <select class="form-select" id="estado-civil" name="estado_civil_aspirante"  aria-label="Floating label select example">
			                    <option value="" selected hidden>Seleccione</option>
			                    <option value="soltero/a">Soltero/a</option>
			                    <option value="casado/a">Casado/a</option>>
			                    <option value="viudo/a">Viudo/a</option>
			                    <option value="divorciado/a">Divorciado/a</option>
			                </select>
			                <label for="estado-civil">Estado civil</label>
			            </div>


			            <div class="form-floating mx-1" style="width: 50%">
			                <select class="form-select" name="sexo_aspirante" id="sexo"  aria-label="Floating label select example">
			                    <option value="" selected hidden>Seleccione</option>
			                    <option value="masculino">Masculino</option>
			                    <option value="femenino">Femenino</option>
			                </select>
			                <label for="sexo">Elija su sexo</label>
			            </div>

			        </div>
			        
			        <div class="mt-10 d-flex" style="width:100%;">

			            <div class="form-floating mb-2 mx-1" >
			                <input type="text" name="dni_aspirante" class="form-control numeric-input"  id="dni" placeholder="DNI">
			                <label for="dni" >DNI (*)</label>
			            </div>

			            
			            <div class="form-floating mb-2 mx-1" >
			                <input type="text" name="cuil_aspirante" class="form-control numeric-input"  id="cuil" placeholder="Cuil">
			                <label for="cuil" >Cuil (*)</label>
			            </div>
			            
			        </div> --}}
			        
			    </div>
			    <div class="bottom">
			        <button href="#" id="my Button" rel="finalizando-inscripcion" class="btn btn-success linkform m-4" >
			            Siguiente
			            <i class="fa-solid fa-arrow-right"></i>
			        </button>

			        <div class="clear"></div>
			    </div>
			</div>










			<div class="finalizando-inscripcion not-display en-comun">
			    <header class="mb-3 d-flex" style="justify-content: space-between; position: relative; padding: 20px 24px 20px 18px ">
			        <h4 >
			            Finalizando 
			        </h4>
			        <div class="" style="position: relative;">
			            <img src="img/logo1.png" alt="logo isft38"  draggable="false" style="position: absolute; right: -5px; width: 45px; bottom:-15px">
			        </div>
			    </header>
			    <div class="progress" style="width: 90%; margin: auto; margin-bottom: 10px; height: 20px;">                        
			        <div class="progress-bar" style="width:10%; ">
			            <span class="progress-bar-text">0%</span>
			        </div>
			    </div>
			    <div  style="text-align: center">
			        <h3>Formulario completado</h3>
			    </div>
			    <div class="mx-4">
			        <blockquote style="text-align: justify">
			            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt sequi alias quas fuga quaerat ab tenetur consectetur sapiente officia voluptates laboriosam iste dolorum, quod at repudiandae accusamus facilis quasi nesciunt!
			        </blockquote>
			    </div>
			   	{{-- <div class="mx-3 ">
			        <h4 >
			           Verifique los datos
			        </h4>
			        
			        <div class=" my-3">        
			            <label for="">Nombres</label><br>
			            <input type="text" id="myInput" class="form-control">

			            <label for="">Apellidos</label><br>
			            <input type="text" id="myInput" class="form-control">			            
			            <label for="">Estado Civil</label><br>
			            <input type="text" id="myInput" class="form-control">			            
			            <label for="">Sexo</label><br>
			            <input type="text" id="myInput" class="form-control">			            
			            <label for="">DNI</label><br>
			            <input type="text" id="myInput" class="form-control">			            
			            <label for="">CUIL</label><br>
			            <input type="text" id="myInput" class="form-control">			            
			            <button type="button" onclick="completarInput()" class="btn btn-primary mt-3">Completar</button>
			        </div>
			    </div>   --}}



			    <div class="bottom">
			        <a href="#" rel="datos-laborales" class="btn btn-primary linkform mx-2 my-4">
			            <i class="fa-solid fa-arrow-left"></i>
			            Atras
			        </a>
			        <button class="btn btn-success my-4" type="submit">
			            Preinscribirme!
			        </button>
			        <div class="clear"></div>

			    </div>
			</div>
		</form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>      
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="js/main.js"></script>     
      <script src="https://unpkg.com/scrollreveal"></script>
	</body>
</html>