<div class="tabla">
   <style>
      tr td{
         text-align: center
      }
   </style>
fotoc_dni_ok 	fotoc_titulo_ok 	certificado_sec_ok 	foto_ok 	partida_nac_ok
   <table id="tabla-registros" class="table table-dark table-striped " >
       
      <thead>
         <td>ID</td>
         <td>FOTO</td>
         <td>Fotocopia de <br> dni </td>
         <td>Fotocopia de <br> titulo</td>
         <td >Certificado de <br> secundaria</td>
         <td>Foto</td>
         <td>Partida de <br> nacimiento</td>
         <td>Acciones</td>
      </thead>
      <tbody>
         @foreach($registros as $registro)
            <tr>
               <td> {{ $registro->id }} </td>
               <td> <img src="{{url('foto/'. $registro->foto) }}" alt="Foto aspirante" width="70px" height="70px"> </td>
               <td >

                  <form class="cambiar-booleano-form" action="{{ route('check.fotoc.dni', ['id' => $registro->id]) }}" method="POST">
                     @csrf
                     @method('PUT')

                     <div class="form-check form-switch">
                        <label for="valor_booleano">

                           <input type="checkbox" name="valor_booleano" class="valor_booleano form-check-input" {{ $registro->fotoc_dni_ok ? 'checked' : '' }}>
                           

                        </label>
                     </div>
                  </form>
                  

                 
               </td>
               <td >
                  <form class="cambiar-booleano-form2" action="{{ route('check.fotoc.titulo', ['id' => $registro->id]) }}" method="POST">
                     @csrf
                     @method('PUT')

                     <div class="form-check form-switch">
                        <label for="">

                           <input type="checkbox" name="valor_booleano3" class="valor_booleano2 form-check-input" {{ $registro->certificado_sec_ok ? 'checked' : '' }}>


                        </label>
                     </div>
                  </form>

               </td>
               <td > 
                  <form class="cambiar-booleano-form3" action="{{ route('check.certif.secund', ['id' => $registro->id]) }}" method="POST">
                     @csrf
                     @method('PUT')

                     <div class="form-check form-switch">
                        <label for="">

                           <input type="checkbox" name="valor_booleano3" class="valor_booleano3 form-check-input" {{ $registro->fotoc_titulo_ok ? 'checked' : '' }}>


                        </label>
                     </div>
                  </form>
                  {{-- {{ $registro->certificado_sec_ok }}  --}}
               </td>
               <td > 
                  <form class="cambiar-booleano-form4" action="{{ route('check.foto', ['id' => $registro->id]) }}" method="POST">
                     @csrf
                     @method('PUT')

                     <div class="form-check form-switch">
                        <label for="">

                           <input type="checkbox" name="valor_booleano4" class="valor_booleano4 form-check-input" {{ $registro->fotoc_titulo_ok ? 'checked' : '' }}>


                        </label>
                     </div>
                  </form>
                  {{-- {{ $registro->foto_ok }}  --}}
               </td>
               <td> {{$registro->partida_nac_ok}}</td>


               <td style="width:240px">

                  <a href="{{ route('registro.editar', $registro->id) }}" class="btn btn-success btn-sm"  title="Editar">
                     Editar
                     <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{$registro->id}}">
                     Eliminar
                     <i class="fa-solid fa-trash"></i>
                  </button>



                  {{-- <a href="#" id="eliminar-usuario" data-usuario-id="1" data-toggle="modal" data-target="#confirmar-modal">Eliminar Usuario</a>  --}}
                  {{-- <form action="{{ route('registro.eliminar', $registro->id) }}" class="d-inline" method="POST">
                     @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-danger btn-sm"title="Eliminar">
                        Eliminar
                        <i class="fa-solid fa-trash"></i>
                     </button>
                  </form>  --}}
                  <a href="{{ route('mostrarDatosAspirante', $registro->id) }} " class="btn btn-secondary btn-sm">
                     Ver <i class="fa-solid fa-eye"></i>
                  </a>

                  
               </td>
            </tr>
         @endforeach

    </tbody>
    
 </table>
</div> 
{{-- 
<div class="tabla">
      <table class="table table-dark table-striped" style="width:100%;">
         <thead>
         <td>ID</td>
         <td>FOTO</td>
         <td>NOMBRES</td>
         <td>APELLIDOS</td>
         <td>DNI</td>
         <td>CELULAR</td>
         <td>CARRERA ELEGIDA</td>
         <td>ACCION</td>
         </thead>
         <tbody>
            @foreach($registros as $registro)
               <tr>
                  <td> {{ $registro->id }} </td>
                  <td> <img src="{{url('foto/'. $registro->foto) }}" alt="Foto aspirante" width="70px" height="70px"> </td>
                  <td> {{ $registro->nombre }} </td>
                  <td> {{ $registro->apellido }} </td>
                  <td> {{ number_format($registro->dni, 0, ',', '.') }} </td>
                  <td> {{ $registro->celular }} </td>
                  <select style="display: none" disabled class="form-select form-select-sm  btn-danger" style="cursor: pointer"   id="carrera_a_estudiar" name="carrera_elegida_aspirante" >


                     @foreach ($carreras as $carrera)
                        <option value="{{ $carrera->id }}" {{ $registro->carrera_id == $carrera->id ? 'selected' : '' }} >
                           {{ $carrera->descripcion }}   
                           {{ $registro->carrera_id == $carrera->id ? $variable=$carrera->descripcion : '' }}
                        </option>
                     @endforeach
                     
                     
                  </select>
                  <td> {{$variable}}</td>

                  <td style="width:240px">

                     <a href="{{ route('registro.editar', $registro->id) }}" class="btn btn-success btn-sm"  title="Editar">
                        Editar
                        <i class="fa-solid fa-pen-to-square"></i>
                     </a>
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{$registro->id}}">
                        Eliminar
                        <i class="fa-solid fa-trash"></i>
                     </button>



                     {{-- <a href="#" id="eliminar-usuario" data-usuario-id="1" data-toggle="modal" data-target="#confirmar-modal">Eliminar Usuario</a>  --}}
                     {{-- <form action="{{ route('registro.eliminar', $registro->id) }}" class="d-inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"title="Eliminar">
                           Eliminar
                           <i class="fa-solid fa-trash"></i>
                        </button>
                     </form>  
                     <a href="{{ route('mostrarDatosAspirante', $registro->id) }} " class="btn btn-secondary btn-sm">
                        Ver <i class="fa-solid fa-eye"></i>
                     </a>

                     
                  </td>
               </tr>
            @endforeach

       </tbody>
       
    </table>
</div>  --}}
@foreach($registros as $registro)
   <!-- Modal -->
   <div class="modal fade" id="modal{{$registro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         
      <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="confirmar-modal-label">Confirmar Eliminación</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <strong>DNI</strong>: {{ number_format( $registro->dni, 0, ',', '.')}}  ({{$registro->nombre}} {{$registro->apellido}})<br> 
                  ¿Estás seguro de que deseas eliminar a este usuario?

                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>


                  <form action="{{ route('registro.eliminar', $registro->id) }}" class="d-inline" method="POST">
                     @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-danger"title="Eliminar">
                        Eliminar
                        <i class="fa-solid fa-trash"></i>
                     </button>
                  </form> 
               </div>
            </div>
      </div>
      

   </div>
@endforeach

<div id="mensaje" style="display:none; color:#000">Cambio guardado con éxito</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function () {
      // Fotocopia dni
      $('.valor_booleano').change(function () {
         $('.cambiar-booleano-form').submit();
      });

      $('.cambiar-booleano-form').submit(function (e) {
         e.preventDefault();

         $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function () {
                  $('#mensaje').show();
                  setTimeout(function () {
                     $('#mensaje').fadeOut();
                  }, 2000); // Ocultar el mensaje después de 2 segundos
            },
         });
      });

      // Fotocopia de titulo
      $('.valor_booleano2').change(function () {
         $('.cambiar-booleano-form2').submit();
      });

      $('.cambiar-booleano-form2').submit(function (e) {
         e.preventDefault();

         $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function () {
                  $('#mensaje').show();
                  setTimeout(function () {
                     $('#mensaje').fadeOut();
                  }, 2000); // Ocultar el mensaje después de 2 segundos
            },
         });
      });

      // Fotocopia de certificado secund
      $('.valor_booleano3').change(function () {
         $('.cambiar-booleano-form3').submit();
      });

      $('.cambiar-booleano-form3').submit(function (e) {
         e.preventDefault();

         $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function () {
                  $('#mensaje').show();
                  setTimeout(function () {
                     $('#mensaje').fadeOut();
                  }, 2000); // Ocultar el mensaje después de 2 segundos
            },
         });
      });
      // Fotocopia de certificado secund
      $('.valor_booleano4').change(function () {
         $('.cambiar-booleano-form4').submit();
      });

      $('.cambiar-booleano-form4').submit(function (e) {
         e.preventDefault();

         $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function () {
                  $('#mensaje').show();
                  setTimeout(function () {
                     $('#mensaje').fadeOut();
                  }, 2000); // Ocultar el mensaje después de 2 segundos
            },
         });
      });
   });
</script>
