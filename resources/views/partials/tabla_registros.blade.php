<div class="tabla">
    <table class="table table-dark table-striped" style="width:auto">
       <thead>
          <td>id</td>
          <td>Nombres</td>
          <td>Apellidos</td>
          <td>Foto</td>
          <td>DNI</td>
          <td>Acción</td>
       </thead>
       <tbody>
          @foreach($registros as $registro)
          <tr>
                <td> {{ $registro->id }} </td>
                <td> {{ $registro->nombre }} </td>
                <td> {{ $registro->apellido }} </td>
                <td> <img src="{{ $registro->foto }}" alt="Foto aspirante" width="70px" height="70px"> </td>
                <td> {{ $registro->dni }} </td>
                <td>

                <a href="{{ route('registro.editar', $registro->id) }}" class="btn btn-success btn-sm"  title="Editar">
                   Editar
                   <i class="fa-solid fa-pen-to-square"></i>
                </a>

               <form action="{{ route('registro.eliminar', $registro->id) }}" class="d-inline" method="POST">
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
</div> 