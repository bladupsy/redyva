<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
        <style>
             body {
                font-family: 'Montserrat', sans-serif;
            }
            #video{
            background-image: url("{{ asset('img/personas.png') }}");
                background-size: cover;
                padding-top: 200px;
                min-height: 850px;

          }
        </style>
    </head>

    <body>
<nav class="navbar navbar-light ">
                <div class="container-sm">
                    <a class="navbar-brand" href="icono">
                    <img src="{{ asset('img/redyva.png') }}" width="53" height="53" >
                    </a>
                    <ul class="nav justify-content-end">
                        <a class="nav-link text-orange" href="quienes">Quienes somos</a>
                      <a class="nav-link text-orange" href="hacen">Qué hacemos</a>
                        <a class="nav-link text-orange" href="bolson"> Conseguí tú bolsón</a>
                      <a class="nav-link text-orange" href="puntos">Puntos de distribución</a>
        
                    </ul>
                </div>
                <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>