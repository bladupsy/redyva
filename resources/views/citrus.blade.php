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
                background-image: url("{{ asset('img/citrus.png') }}");
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
            
            <div class="card" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
    </p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
<div class="col"></div>
            
           
            </div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>