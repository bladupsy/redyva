<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <title>Redyva</title>
    <head></head>
<body>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">seleccioná tu bolsón</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          
          <p><br>&nbsp;&nbsp; <a href="#"  id="hello" role="button" class="btn btn-outline-orange text-dark rounded-pill"><b>pesado<b></a> 
          &nbsp;&nbsp;&nbsp;<a href="#" id="hello" role="button" class="btn btn-outline-orange text-dark rounded-pill" ><b>citrus<b></a> 
          &nbsp;&nbsp;&nbsp;<a href="#" id="hello" role="button" class="btn btn-outline-orange text-dark rounded-pill" ><b>verde<b></a> 
          <br></p>
        </div>
        <div class="modal-footer">
          <p id="hello" >Se entregan los viernes</p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>