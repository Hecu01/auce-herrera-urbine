
<header class="mb-3 d-flex" style="justify-content: space-between; position: relative;">
    <h4 >
        Datos personales [1/4] 
    </h4>
    <div class="" style="position: relative;">
        <img src="img/logo1.png" alt="logo isft38" style="position: absolute; right: -17px; width: 45px; bottom:-15px">
    </div>
</header>
<div class="progress" style="width: 90%; margin: auto; margin-bottom: 10px; height: 20px;">                        
    <div class="progress-bar" style="width:10%; ">
        <span class="progress-bar-text">0%</span>
    </div>
</div>
<div class="mx-3">
    <div class="" style="display: flex; justify-content: space-between; align-items:center;">

        <label class="custom-file-upload" style="text-align:center; margin:0px 30px; margin-right:20px;">
            <input type="file" id="foto-aspirante" class="btn btn-secondary" name="gorra" onchange="previewImage(event, '#imgPreview')" required>
            Subir foto
        </label>
        <div class="container d-flex justify-content-center" style="height: 130px;width:130px;  display:flex; justify-content: center; box-shadow: 0px 0px 1px #000; background:#fff">
            <a href="#" type="button">
                
                <img id="imgPreview" style="height: 130px; width:130px;">

            </a>
        </div>


        
    </div>
            
    <h5 class="mt-3 mx-2">Datos personales</h5>
    <div class="d-flex mt-2 ">
        <div class="mx-1">
            <input required class="form-control" id="nombres" placeholder="Nombres (*)" type="text" >
        </div>
        <div class="mx-1">
            <input required class="form-control mb-2" id="apellidos" placeholder="Apellidos (*)" type="text" >
        </div>
    </div>

    <div class="d-flex justify-content-center my-3 mt-1 " style="width:100%;">
        <div class="mx-1  " style="width:100%;">

            <select name="" id=" "class="form-control ">
                <option value="" selected hidden>Elija estado civil </option>
                <option value="">Soltero/a</option>
                <option value="">Casado/a</option>>
                <option value="">Viudo/a</option>
                <option value="">Divorciado/a</option>
                
            </select>

        </div>
        <div class="mx-1 " style="width:100%;">

            <select name="" id="sexo" class="form-control" >
                <option value="" selected hidden>Elija su sexo</option>
                <option value="" >Masculino</option>
                <option value="" >Femenino</option>
            </select>

        </div>
    </div>

    <div class="mt-10 d-flex" style="width:100%;">
        <div class="mx-1">

            <input required class="form-control " style="width:100%;" type="number" placeholder="DNI (*)">
        </div>
        
        <div class="mx-1">
            
            <input required class="form-control " style="width:100%;" type="number" placeholder="CUIL (*)">

        </div>

    </div>

    <div class="mt-3 desktop-desing" style="width:100%;">
        <div class="mx-1">
            <label for="calendario" style="width:100%;"class="d-block mt-2">Fecha Nacimiento</label>
        </div>
        <div class="mx-1"  style="width:55%;" >
            <input required type="date" name="" class="form-control" id="calendario">
        </div>
    </div> 

    <div class="mt-3 responsive-desing" style=" width:100%;">
        <div class="mx-2">
            <label for="calendario" >Fecha Nacimiento</label>
        </div>
        <div class="mx-1"  >
            <input required type="date" name="" class="form-control" id="calendario" placeholder="inserte nacimiento">
        </div>
    </div>
</div>
<div class="bottom">

    <a href="#" rel="register1" class="btn btn-success linkform m-4">
        Siguiente
        <i class="fa-solid fa-arrow-right"></i>
    </a>
    <div class="clear"></div>
</div>