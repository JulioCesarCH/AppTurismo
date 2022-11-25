<body class="antialiased">
    @extends("layouts.appnavega")
    <section class="questions contenedor">
        <section class="textos-questions">
            <h4>Huánuco</h4>
            <h1>Centros de Salud</h1>
        </section>
        <img src="{{asset("img/establecimientos/ClinicasPortada.jpg")}}" width="150" height="350">
    </section>
    <section class="vista">
        @foreach($clini as $clinic)
            <div class="conten-vista">
                <div>                   
                    <h2>{{$clinic->nombre}}</h2>
                    <img src="{{asset($clinic->imagen)}}" height="250" width="400">
                </div>
                <div class="vista-descripcion">
                    <div>
                        <h3>Descripción</h3>
                        <h6>{{$clinic->descripcion}}</h6>
                    </div>
                    <div>
                        <h4>Dirección</h4>
                        <h6>{{$clinic->direccion}}</h6>
                    </div>
                    <div>
                        <h4>Servicios</h4>
                        <h6>{{$clinic->servicios}}</h6>
                    </div>
                    <div>
                        <h4>Telefonos</h4>
                        <h6>{{$clinic->telf}}</h6>
                    </div>
                    <div>
                        <h4>Horarios</h4>
                        <h6>{{$clinic->horarios}}</h6>
                    </div>
                </div>
            </div>
        @endforeach
        {{$clini->links()}}
    </section>         
</body>