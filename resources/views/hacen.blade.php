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
          #persona {
            position: absolute;
width: 750px;
height: 750px;
left: 0px;
padding-top: 100px;

          }
          #somos {
            padding-top: 100px;
            padding-right: 100px;
padding-left: 20px;
width: 413px;
height: 1366px;
font-family: 'Montserrat', sans-serif;
font-size: 18px;
line-height: 30px;

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
        <article class="container-fluid">
        <div class="row g-0">
        <div class="col-sm-6 col-md-8"><img src="{{asset('img/personas.png') }}" id="persona"></div>
        <div class="col-6 col-md-4" id="somos"><p><b>Somos una red con convicciones</b><br><br>De dónde procede el concepto de soberanía alimentaria ?<br>El concepto de soberanía alimentaria fue desarrollado por Vía Campesina y llevado al debate público con ocasión de la Cumbre Mundial de la Alimentación en 1996, y ofrece una alternativa a las políticas neoliberales.<br> Desde entonces, dicho concepto se ha convertido en un tema mayor del debate agrario internacional, inclusive en el seno de las instancias de las Naciones Unidas.<br> Fue el tema principal del foro ONG paralelo a la cumbre mundial de la alimentacion de la FAO de junio del 2002.</p>
        </div>
        </div>
        </article>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>