    <body class="antialiased">
        @extends("layouts.appnavega")
        <section class="questions contenedor">
            <section class="textos-questions">
                <h4>Huánuco</h4>
                <h1>Gastronomia</h1>
            </section>
            <img src="{{asset("img/gastronomia/GastronomiaHco.jpg")}}" width="150" height="350">
        </section>   
        <section class="vista">
            @foreach($gastros as $gastro)
                <div class="conten-vista">
                    <div>                   
                        <h2>{{$gastro->nombre}}</h2>
                        <img src="{{asset($gastro->imagen)}}" height="250" width="400">
                    </div>
                    <div>
                        <h6>{{$gastro->descripcion}}</h6>
                    </div>
                </div>
            @endforeach
            {{$gastros->links()}}
        </section>         
    </body>