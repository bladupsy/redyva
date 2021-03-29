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

    .persona {

      width: 750px;
      height: 550px;
      margin-left: -20px;
      padding-top: 70px;

    }

    .somos {
      padding-top: 70px;
      padding-right: 50px;
      width: 413px;
      /*height: 1366px;*/
      height: 600px;
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      line-height: 30px;
      margin-left: -80px;
    }

    #titu{
      color: #e94d1a;
      font-size: 20px
    }

    .leer {
      padding-top: -100px;
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      line-height: 30px;
      margin-left: -80px;
    }

    #img{
      margin-left: 10px;
    }

  </style>
</head>

<body>
  <nav class="navbar navbar-light ">
    <div class="container-sm">
      <a class="navbar-brand" href="index">
        <img src="{{ asset('img/redyva.png') }}" class="img-fluid" width="53" height="53">
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
    <div class="row justify-content-center">
      <div class="col-8">
        <img id="img" src="{{ asset('img/personas.png') }}" class="persona">
      </div>
      <div class="col-4">
        <p class="somos"><b id="titu">Somos una red con convicciones</b><br><br>
          De dónde procede el concepto de soberanía alimentaria: El concepto de <br>
          soberanía alimentaria fue desarrollado por Vía Campesina y llevado al debate público <br>
          con ocasión de la Cumbre Mundial de la Alimentación en 1996, y ofrece una <br>
          alternativa a las políticas neoliberales. <br>
          Desde entonces, dicho concepto se<br>
          ha convertido en un tema mayor del debate agrario internacional, inclusive en <br>
          el seno de las instancias de las Naciones Unidas. Fue el tema principal del foro<br> 
          ONG paralelo a la cumbre mundial de la alimentacion de la FAO de junio del 2002.
        </p>
        <!--<a class="leer"><b>Leer más</b></a>-->
          
      </div>
    </div>
  </article>

  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>