<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
  <title>Redyva</title>

  <head>
    <style>
      .fondo-inicio {
        position: relative;
        background-image: url("{{ asset('img/verde.png') }}");
        background-size: cover;
        padding-top: 200px;
        min-height: 450px;
        z-index: 1;
      }

      .subtitle {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        line-height: 25dpx;
        letter-spacing: -0.03em;
      }
      .card-center {
          z-index: 99;
          margin-top: -100px;
      }
      .separador-derecho {
        padding-right: 46px;
      }
    </style>
  </head>

<body>
  <div class="container-fluid fondo-inicio" ></div>
    <div>
     
      
      
          <div class="card card-center mx-auto" style="width:  30rem;"><!--mx: margin igual -->
            <div class="card-body">
              <h5 class="card-title">selecciona tú bolsón &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> para el:</b> viernes </h5>
              <hr>
              <h6 class="card-subtitle mb-2 text-dark"><b>verde</b></h6>
              <a>pedir</a>
              <hr>
              <p class="card-text">
              <p>Éste es el contenido</p>
              <div class="subtitle">
                <table>
                  <tbody>
                    <tr>
                      <td class="separador-derecho">Acelga</td>
                      <td>1 kilo</td>
                    </tr>
                    <tr>
                      <td class="separador-derecho">Acelga</td>
                      <td>1 kilo</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </p>

            </div>
          </div>
        
        


    
      <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>