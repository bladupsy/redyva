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
                
                
font-family:'Montserrat', sans-serif;
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 24px;
letter-spacing: -0.01em;
            }
            #text {
                font-family: 'Montserrat', sans-serif;
                position: absolute;
                width: 743px;
                font-size: 73px;
                text-align: left;
                
                line-height: 77px;
                letter-spacing: -0.045em;

            }
          #naranja {
              background-color: #E94E1A;
              background-size: cover;
              padding-top: 150px;
              min-height: 750px;
              font-family: 'Montserrat', sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 35px;
                line-height: 43px;
                letter-spacing: -0.01em;
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
            background-color: #fff !important;
            height: 650px;
            width: 100%;
            opacity: 0.7;
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
        .nav {
            height: 90px;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            padding-top: 30px;
            font-weight: 600;
            line-height: 18px;
            letter-spacing: 0em;
                

          }

          .parte2 {
            font-family:  'Montserrat', sans-serif;
font-style: normal;

font-size: 26px;
line-height: 27px;

/* or 27px */
letter-spacing: -0.05em;
          }
          #myModal {
            font-family:'Montserrat', sans-serif;
font-style: normal;
font-weight: normal;
font-size: 26px;
line-height: 32px;

  


/* identical to box height */
letter-spacing: -0.03em;
          }
          #hello {
            font-family: 'Montserrat', sans-serif;
font-style: normal;
font-weight: normal;
font-size: 26px;
line-height: 32px;

/* identical to box height */
letter-spacing: -0.01em;
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
                        <a class="nav-link text-orange"> Conseguí <br>tú bolsón</a>
                      <a class="nav-link text-orange" href="puntos">Puntos de<br> distribución</a>
        
        
                    </ul>
                </div>
    
    
            </nav>
            <article class="container-fluid" id="fondo-inicio">
                <div class="container-sm">
                    <a class="btn btn-light text-orange rounded-pill parte1">Somos una red que<strong> produce, distribuye y comercializa</strong> con sentido político</a>
                    <br>
                    <br>
                    <p class="text-light" id="text"><strong>Queremos acercarte productos sanos, frescos y locales</strong></p>
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
                    
                    <div class="container">
                    <a class="btn btn-orange text-light rounded-pill parte2" href="producto"  data-toggle="modal" data-target="#myModal">encargá tú bolsón</a>
                    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">seleccioná tu bolsón</h4>
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        </div>
        <div class="modal-body">
          
          <p><br><br>&nbsp;&nbsp; <a href="pesado"  id="hello" role="button" class="btn btn-outline-orange text-dark rounded-pill"><b>pesado<b></a> 
          &nbsp;&nbsp;&nbsp;<a href="citrus" id="hello" role="button" class="btn btn-outline-orange text-dark rounded-pill" ><b>citrus<b></a> 
          &nbsp;&nbsp;&nbsp;<a href="verde" id="hello" role="button" class="btn btn-outline-orange text-dark rounded-pill" ><b>verde<b></a> 
          <br><br></p>
        </div>
        <div class="modal-footer">
          <h4 class="">Se entregan: <h4>
        </div>
      </div>
      
    </div>
  </div>
                    </div>
                </div>
            </article>
            <article class="container-fluid" id="naranja">
                <div class="container-sm">
                    <hr style=" width: 15%; height: 10px; background-color: #B7451C; text-align:left;margin-left:0; border-radius: 5px 5px 5px 5px;" >
                    <a id="etiqueta">desde el 2020</a>
                   
                <p class="texto text-light">Nos encontramos organizaciones <br>sociales, cooperativas productivas,<br> trabajadores y trabajadoras del agro, todos bajo la consigna de proveer alimentos sanos.</p><br><br><br><br><br><br><br>
                <hr style=" width: 15%; height: 10px; background-color: #B7451C; text-align:left;margin-left:0; border-radius: 5px 5px 5px 5px;" >
                <a id="etiqueta" href="hacen">conoce más</a>
                </div>
            </article>
            <article  class="container-fluid" id="video">
            
            </article>
            <article class="container-sm map">
            <div class="container-sm row justify-content-between">
                <div class="col-4"><br><br><br>
                <a type="button"class="btn btn-outline-orange rounded-pill" href="puntos">&nbsp;&nbsp;Áca podés encontrar los <br> puntos de distribución&nbsp;&nbsp;</a>
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
                                     maxZoom: 15
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
                    <div class="row align-items-center">
                        <div class="col"><img src="{{ asset('img/iconos/A-T.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Sindicato-Trabajadores-Pasivos.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Frente-Patria.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Tupac-Amaru.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Artefimera.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/ATE.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Coop-Mbarete.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Nuestras-Raices.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Las-Tunas.png') }}"></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col"><img src="{{ asset('img/iconos/Gob.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Coop.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Municipalidad.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/SENASA.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/INTA.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Gob-Nac.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/scra.png') }}"></div>
                    </div>
                    <hr>

                </div>
            </article>


        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>

  
        
      


