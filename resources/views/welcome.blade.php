<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Visita Turismo Región Huánuco</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
            @extends("layouts.appnavega")
            <div class="contenedor">
                <section class="contenido-header">
                    <section class="carrusel">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{asset("img/ManosCruzadas.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                  <p>Templo de Manos Cruzadas "Kotosh"</p>
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{asset("img/HuanucoPampa.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                  <p>Huánuco Pampa</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset("img/BellaDurmiente.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                    <p>Tingo Maria</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset("img/CastilloChupan.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                    <p>Castillo de Chupan - Yarowilca</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset("img/Tantamayo.jpg")}}" width="600" height="500">
                                <div class="carousel-caption">
                                    <p>Tantamayo</p>
                                </div>
                              </div>
 
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                       
                        <a href="#beneficios">Ver Más</a>
                    </section>  
                    
                    <img src="{{asset("img/PortadaPagina.jpg")}}" height="660">
                </section>
            </div>  
            <section class="about-us">
                <div class="contenedor1">
                    <h2 class="titulo">Servicios Turisticos</h2>
                    <div class="contenedor-articulo">
                        <div class="articulo" data-aos="zoom-in-right">
                            <img src="{{asset("img/Hotel.png")}}" width="100" height="100">
                            <h3>Alojamiento</h3>
                            <p>Un hotel con vistas, una tienda de campaña en un camping en plena naturaleza, un apartamento en el centro de la ciudad… En Huánuco hay una variada oferta de alojamiento</p>
                            <a href="/alojamiento">Ver Más ---></a>
                        </div>
                        <div class="articulo" data-aos="zoom-in-right">
                            <img src="{{asset("img/Restaurantes.png")}}" width="100" height="100">
                            <h3>Restaurantes</h3>
                            <p>Una de las mejores formas de disfrutar de Huánuco es a través del paladar. Descubrirás una cultura gastronómica sorprendente a través de económicos menús del día y de restaurantes de renombre</p>
                            <a href="/restaurante">Ver Más ---></a>
                        </div>
                        <div class="articulo" data-aos="zoom-in-right">
                            <img src="{{asset("img/Transporte.png")}}" width="100" height="100">
                            <h3>Transporte</h3>
                            <p>En avión, en auto..Cualquier transporte sirve para llegar a Huánuco. Aquí encontraras todas las opciones disponibles para ayudaros a decidir qué medio de transporte te conviene más</p>
                            <a href="/transporte">Ver Más ---></a>
                        </div>
                        <div class="articulo" data-aos="zoom-in-right">
                            <img src="{{asset("img/Clinica.png")}}" width="100" height="100">
                            <h3>Clinicas Hospitales</h3>
                            <p>contamos con una variedad de destinos especializados en turismo médico donde se unen prestadores de servicios turísticos y atención médica de la más alta calidad para atender las especialidades</p>
                            <a href="/clinicas">Ver Más ---></a>
                        </div>
                    </div>
                </div>
            </section> 
    </body>
</html>
