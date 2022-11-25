<body class="antialiased">
    @extends("layouts.appnavega")
    <section class="questions contenedor">
        <section class="textos-questions">
            <h4>Huánuco</h4>
            <h1>Transporte</h1>
        </section>
        <img src="{{asset("img/establecimientos/TransportesPortada.jpg")}}" width="150" height="350">
    </section>
    <section class="vista">
        @foreach($trans as $transp)
            <div class="conten-vista">
                <div>                   
                    <h2>{{$transp->nombre}}</h2>
                    <img src="{{asset($transp->imagen)}}" height="250" width="400">
                </div>
                <div class="vista-descripcion">
                    <div>
                        <h3>Descripción</h3>
                        <h6>{{$transp->descripcion}}</h6>
                    </div>
                    <div>
                        <h4>Dirección</h4>
                        <h6>{{$transp->direccion}}</h6>
                    </div>
                    <div>
                        <h4>Servicios</h4>
                        <h6>{{$transp->servicios}}</h6>
                    </div>
                    <div>
                        <h4>Telefonos</h4>
                        <h6>{{$transp->telf}}</h6>
                    </div>
                    <div>
                        <h4>Horarios</h4>
                        <h6>{{$transp->horarios}}</h6>
                    </div>
                </div>
            </div>
        @endforeach
        {{$trans->links()}}
    </section>         
</body>