@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">  
                @auth
                @if(session('tipo')==1)
                <h3>Registro de Gastronomia Huanuqueña</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrargastro"><i class="bi bi-file-earmark-plus"></i> Nuevo</button>
                </div> 
                @endif
                @endauth

                <br>
                <table id="gastro" class="table table-light table-hover">
                    <caption>Gstronomia Huanuqueña</caption>
                    <thead class="table-dark">
                        <tr>
                            <th>imagen</th>
                            <th>nombre</th>
                            <th>descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultados as $gastro)
                            <tr>
                            <td>
                               <img src="{{$gastro->imagen}}" width="50" height="60" class="img img-responsive"/>
                            </td>
                            <td>{{$gastro->nombre}}</td>
                            <td>{{$gastro->descripcion}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="registrargastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>             
          <form action="/gastronomiap/guardar" method="post" enctype="multipart/form-data">
             <div class="modal-body">
              <h5>Registre los datos de gastronomia</h5>
              <br>
              @csrf
                Imagen: <input class="form-control my-1" type="file" name="imagen" required><br>
                Nombre: <input class="form-control my-1" type="text" name="nombre" required><br>
                Descripcion: <textarea class="form-control input-lg my-2" placeholder="Escribe aquí la Descripcion..." name="descripcion" required></textarea><br>               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
      </div>
    </div>
</div>

@endsection

@section("scripts")
    <script>
        $(document).ready(function () {
        $('#gastro').DataTable();
        });
    </script>  
@endsection