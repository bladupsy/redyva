<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
        
    <title>Redyva</title>
        <style>
            .nav {
            height: 90px;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            padding-top: 30px;
            font-weight: 600;
            line-height: 18px;
            letter-spacing: 0em;
                

          }
        </style>
        </head>
    <body>
    <nav class="navbar navbar-light ">
                <div class="container-sm">
                    <a class="navbar-brand" href="index">
                    <img src="{{ asset('img/redyva.png') }}" width="53" height="53" >
                    </a>
                    <ul class="nav justify-content-end">
                        <a class="nav-link text-orange" href="quienes">Quienes <br>somos</a>
                        <a class="nav-link text-orange" href="hacen">Qué <br>hacemos</a>
                        <a class="nav-link text-orange" href="bolson"> Conseguí <br>tú bolsón</a>
                      <a class="nav-link text-orange" href="puntos">Puntos de<br> distribución</a>
        
                    </ul>
                </div>
        </nav>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>