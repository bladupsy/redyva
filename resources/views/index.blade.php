<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
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
            .parte1 {
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
          #video{
            background-image: url("{{ asset('img/personas.png') }}");
                background-size: cover;
                padding-top: 200px;
                min-height: 850px;

          }
          #map { 
            
            height: 650px;
            box-shadow: 5px 5px 5px #888;
            width: 100%;
         }
        .map {
                background-image: white;
                background-size: cover;
                padding-top: 100px;
                min-height: 1000px;

        }
        #footer {
            background-color: #fff;
              background-size: cover;
              padding-top: 150px;
              min-height: 700px;
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
            <article class="container-fluid" id="fondo-inicio">
                <div class="container-sm">
                    <a class="btn btn-light text-orange rounded-pill parte1">Somos una red que<strong> produce, distribuye y comercializa</strong> con sentido político</a>
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
                    <button class="btn btn-orange text-light rounded-pill parte1" href="button">encargá tú bolsón</button>
                    
                </div>
            </article>
            <article class="container-fluid" id="naranja">
                <div class="container-sm">
                    <hr style=" width: 20%; height: 10px; background-color: #B7451C; text-align:left;margin-left:0; border-radius: 5px 5px 5px 5px;" >
                    <a id="etiqueta">desde el 2020</a>
                   
                <p class="texto text-light">Nos encontramos organizaciones <br>sociales, cooperativas productivas,<br> trabajadores y trabajadoras del agro, todos bajo la consigna de proveer alimentos sanos.</p><br><br><br><br><br><br><br><br><br><br><br><br>
                <hr style=" width: 20%; height: 10px; background-color: #B7451C; text-align:left;margin-left:0; border-radius: 5px 5px 5px 5px;" >
                <a id="etiqueta">conoce más</a>
                </div>
            </article>
            <article  class="container-fluid" id="video">
            
            </article>
            <article class="container-sm map">
            <div class="container-sm row justify-content-between">
                <div class="col-4"><br><br><br>
                <button type="button"class="btn btn-outline-orange rounded-pill">&nbsp;&nbsp;Áca podés encontrar los <br> puntos de distribución&nbsp;&nbsp;</button>
                <br><p class="text-orange"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>Posadas</strong></p>
            </div>
            <div class="col-4"><img src="{{ asset('img/pizzarra.png') }}"width="156px" height="156px"></div>
            </div>
                <div id='map' >
                    <script type="text/javascript">		
                         //Cargando nuestro mapa
                            var markers = [
                                 ["León", -27.38441, -55.9015],
                                 ["Zamora",-27.40522, -55.89658],
                                 ["Aeroclub", -27.4112, -55.95716],
                                 ["B° El progreso", -27.41117, -55.90818],
 
                                 ];
                            var zoom = 6;

                            var mapsipe = L.map('map').
                                     setView([-27.3812,-55.9196],  15); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar, en nuestro caso Ibi 
                                     L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                     attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
                                     maxZoom: 13
                                    }).addTo(mapsipe);

                            for (var i = 0; i < markers.length; i++) {
                            marker = new L.marker([markers[i][1],markers[i][2]])
                            .bindPopup(markers[i][0])
                            .addTo(mapsipe);
                        }
                    </script>
                    
                </div>
            </article>
            <article class="container-fluid" id="footer">
                <div class="container-sm">
                    <hr>

                </div>
            </article>


        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>

  
        
      


