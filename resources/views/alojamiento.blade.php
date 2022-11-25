    <body class="antialiased">
        @extends("layouts.appnavega")
        <section class="questions contenedor">
            <section class="textos-questions">
                <h4>Huánuco</h4>
                <h1>Hoteles</h1>
            </section>
            <img src="{{asset("img/establecimientos/AlojamientoPortada.jpg")}}" width="150" height="350">
        </section>
        <section class="vista">
            @foreach($aloja as $alojami)
                <div class="conten-vista">
                    <div>                   
                        <h2>{{$alojami->nombre}}</h2>
                        <img src="{{asset($alojami->imagen)}}" height="250" width="400">
                    </div>
                    <div class="vista-descripcion">
                        <div>
                            <h3>Descripción</h3>
                            <h6>{{$alojami->descripcion}}</h6>
                        </div>
                        <div>
                            <h4>Dirección</h4>
                            <h6>{{$alojami->direccion}}</h6>
                        </div>
                        <div>
                            <h4>Servicios</h4>
                            <h6>{{$alojami->servicios}}</h6>
                        </div>
                        <div>
                            <h4>Telefonos</h4>
                            <h6>{{$alojami->telf}}</h6>
                        </div>
                        <div>
                            <h4>Horarios</h4>
                            <h6>{{$alojami->horarios}}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$aloja->links()}}
        </section>         
</body>