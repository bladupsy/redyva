<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
  <title>RedyVa</title>

  <style>
    #fondo-presentacion {
      margin: 0;
      background-image: url("{{ asset('img/perejil.png') }}");
      background-size: cover;
      background-repeat: no-repeat;
      padding-top: 250px;
      min-height: 800px;
      font-size: 18px;
      font-style: normal;
      color: #f86a0c !important;


    }
  </style>


</head>

<body>

  <div class="container-sm">
    <ul class="navbar justify-content-center">

      <a class="navbar-brank ">
        <img src="{{ asset('img/silicon-icon.png') }}">
      </a>

      <a class="navbar-brank">
        <img src="{{ asset('img/dirmod.png') }}">
      </a>
      <a class="navbar-brank">
        <img src="{{ asset('img/logo-utn.png') }}">
      </a>
    </ul>
  </div>

  <article class="container-fluid" id="fondo-presentacion">

    <div class="row justify-content-md-center">
      <div class="col col-lg-2">
        <img src="{{ asset('img/redyva.png') }}">
      </div>
      <div class="col-md-auto">
        <p><strong>Proyecto final de cursada</strong><br>Desarrollador web <br>Fullstack: de 0 a 100</p>
        <p> Profesor <br>Lucas Saclier</p>
      </div>
      <div class="col-md-auto">
        <p><strong>Intro | Red de distribución </strong><br>de productos agropecuarios<br>de la zona. Desarrollar una<br>plataforma que de facilidades<br>para que el/la usuario/a pueda<br>realizar un pedido y coordinar<br>como retirarlo.</p><br>
        <a class="btn btn-light text-orange btn-lg  rounded-pill " href="index">proyecto</a>
      </div>
      <div class="col-lg-2">
        <p><strong>Integrantes</strong><br>Darío Javier Piñeyro <br>Gisela A. Cristaldo<br>Juan Nahuel Beck</p>
      </div>
    </div>
  </article>
  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>