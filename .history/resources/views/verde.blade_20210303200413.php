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
                #subtitle {
                    font-family:  'Montserrat', sans-serif;
                    font-size: 20px;
                    line-height: 25dpx;
                    letter-spacing: -0.03em;
}
            </style>
        </head>
        <body>
        <div class="container-fluid " id="fondo-inicio"><div>
            <div class="row align-items-center">
            <div class="col"><span class="glyphicon glyphicon-chevron-left" type="button"></span></div>
            <div class="col">
  <div class="card" style="width:  30rem;" >
    <div class="card-body">
      <h5 class="card-title">selecciona tú bolsón  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b> para el:</b> viernes </h5>
      <hr>
      <h6 class="card-subtitle mb-2 text-dark"><b>verde</b></h6>
      <a>pedir</a>
      <hr>
        <p class="card-text">
          <p>Éste es el contenido</p>
          <div id="subtitle"> 
            <table>
            <thead>
              <tr>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
              </tr>
            </thead>
            </table>
          </div>
        </p>
   
  </div>
</div>
</div>
<div class="col"></div>
            
           
            </div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>