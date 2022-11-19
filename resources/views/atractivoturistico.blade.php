<body class="antialiased">
            @extends("layouts.appnavega")
            <section class="questions contenedor">
                <section class="textos-questions">
                    <h4>Huánuco</h4>
                    <h1>Atractivos Turisticos</h1>
                </section>
                <img src="{{asset("img/atractivos/AtractivoHco.jpg")}}" width="150" height="350">
            </section>
            <section class="vista">
                @foreach($atractivos as $atractivo)
                    <div class="conten-vista">
                        <div>                   
                            <h2>{{$atractivo->nombre}}</h2>
                            <img src="{{asset($atractivo->imagen)}}" height="250" width="400">
                        </div>
                        <div>
                            <h6>{{$atractivo->descripcion}}</h6>
                        </div>
                        <div>
                            <h6>{{$atractivo->ubicacion}}</h6>
                        </div>
                    </div>
                @endforeach
                {{$atractivos->links()}}
            </section>         
</body>