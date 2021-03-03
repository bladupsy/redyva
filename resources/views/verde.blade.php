<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
       <title>Redyva</title>
        <head>
            <style>
                    #fondo-inicio {
                background-image: url("{{ asset('img/verde.png') }}");
                background-size: cover;
                padding-top: 200px;
                min-height: 450px;
                
            }
            </style>
        </head>
        <body>
            <div class="container-fluid " id="fondo-inicio"><div>
            <div class="row align-items-center">
            <div class="col"></div>
            <div class="col">
            
            <div class="card" style="width: 30 rem;" >
  <div class="card-body">
    <h5 class="card-title">selecciona tú bolsón  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b> para el:</b> viernes </h5>
    <hr>
    <h6 class="card-subtitle mb-2 text-dark"><b>verde</b></h6>
    <a>pedir</a>
    <hr>
    <p class="card-text">
      <p>Éste es el contenido</p>
      <p>
    Lechuga 1kg aprox.<br>
Rabanito  2kg aprox.<br>
Cebollita 1kg aprox.<br>
Palta  1kg aprox.<br>
Acelga 1kg aprox.<br>
Perejil 500 gr aprox. <br>
          </p>
    </p>
   
  </div>
</div>
</div>
<div class="col"></div>
            
           
            </div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>