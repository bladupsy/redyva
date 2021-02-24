<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
            }

            #fondo-inicio {
                background-image: url("{{ asset('img/cilantro.png') }}");
                background-size: cover;
                padding-top: 200px;
                min-height: 850px;
                
            }
            .btn {
                font-size: 18px;
            }
            #text {
                font-family: 'Montserrat', sans-serif;
                position: absolute;
                width: 743px;
                font-size: 73px;
                text-align: left;
                font-weight: bold;
                line-height: 77px;
                letter-spacing: -0.045em;

            }
          #naranja {
              background-color: #E94E1A;
              background-size: cover;
              padding-top: 150px;
              min-height: 700px;
          }
          .texto {
            position: absolute;
                width: 800px;
                font-size: 45px;
                text-align: left;
                font-weight: bold;
                line-height: 46px;
          }
          #etiqueta {
              font-size: 30px;
              color: white;
              font-weight: italic;
              
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
    
    
            </nav>
            <article class="conteiner" id="fondo-inicio">
                <div class="container-sm">
                    <a class="btn btn-light text-orange rounded-pill">Somos una red que<strong> produce, distribuye y comercializa</strong> con sentido político</a>
                    <br>
                    <br>
                    <p class="text-light" id="text">Queremos acercarte productos sanos, frescos y locales</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <button class="btn btn-orange text-light rounded-pill" href="button">encargá tú bolsón</button>
                    
                </div>
            </article>
            <article class="container-fluid" id="naranja">
                <div class="container-sm">
                    <hr style=" widht: 175px; height: 5px; background-color: #B7451C;" >
                    <a id="etiqueta">desde el 2020</a>
                   
                <p class="texto text-light">Nos encontramos organizaciones <br>sociales, cooperativas productivas,<br> trabajadores y trabajadoras del agro, todos bajo la consigna de proveer alimentos sanos.</p><br><br><br><br><br><br><br><br><br><br><br><br>
                <hr style=" widht: 175px; height: 5px; background-color: #B7451C;" >
                <a id="etiqueta">conoce más</a>
                </div>
            </article>
   


        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>

  
        
      


