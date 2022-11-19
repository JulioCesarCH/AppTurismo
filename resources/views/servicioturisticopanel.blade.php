@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">  
                @auth
                @if(session('tipo_usuario')=="admin")
                <h3>Registro de Servicios turisticos</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarservicio"><i class="bi bi-file-earmark-plus"></i> Nuevo</button>
                </div> 
                @endif
                @endauth

                <br>
                <table id="servicios" class="table table-light table-hover">
                    <caption>Servicios Turisticos</caption>
                    <thead class="table-dark">
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre Establecimiento</th>
                            <th>Descripcion</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Servicios</th>
                            <th>Horario</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultados as $serviciot)
                            <tr>
                            <td>
                               <img src="{{$serviciot->imagen}}" width="50" height="60" class="img img-responsive"/>
                            </td>
                            <td>{{$serviciot->nombre}}</td>
                            <td>{{$serviciot->descripcion}}</td>
                            <td>{{$serviciot->direccion}}</td>
                            <td>{{$serviciot->telf}}</td>
                            <td>{{$serviciot->servicios}}</td>
                            <td>{{$serviciot->horario}}</td>
                            <td>{{$serviciot->tiposervicio_id}}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="registrarservicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>             
          <form action="/servicioturisticop/guardar" method="post" enctype="multipart/form-data">
             <div class="modal-body">
              <h5>Registre los datos del Establecimiento</h5>
              <br>
              @csrf
                <label for="exampleFormControl1" class="form-label">Seleccione Tipo de Servicio</label>
                <select class="form-select" name="tiposervicio_id">
                    @foreach ($resultados2 as $tiposerv)
                        <option value={{$tiposerv->id}}>{{$tiposerv->descripcion}}</option>;
                    @endforeach
                </select>
                Imagen: <input class="form-control my-2" type="file" name="imagen" required><br>
                Nombre del Establecimiento: <input class="form-control" type="text" name="nombre" required><br>
                Descripcion: <textarea class="form-control" placeholder="Escribe aquí la Descripcion..." name="descripcion" required></textarea><br>
                Direccion: <textarea class="form-control" placeholder="Escribe aquí la Ubicacion..." name="direccion" required></textarea><br>               
                Telefonos: <input class="form-control" type="text" name="telf" required><br>
                Horarios: <input class="form-control" type="text" name="horario" required><br>
                Servicios: <textarea class="form-control" placeholder="Escribe Servicios que Ofrece..." name="servicios" required></textarea><br>               
                
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
        $('#servicios').DataTable();
        });
    </script>  
@endsection