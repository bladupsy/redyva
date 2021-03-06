<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
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

    .h3 {
      font-family: 'Montserrat', sans-serif;
      font-size: 33px;
      font-style: normal;
      font-weight: 700;
      line-height: 43px;
      letter-spacing: 0em;
      text-align: left;
    }

    #distribucion {
      padding-top: 100px;
      min-height: 850px;
    }

    #col {
      font-family: 'Montserrat', sans-serif;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 30px;
      letter-spacing: 0em;
      text-align: left;
    }

    #map {
      background-color: #fff !important;
      height: 650px;
      width: 100%;
      opacity: 0.7;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light ">
    <div class="container-sm">
      <a class="navbar-brand" href="index">
        <img src="{{ asset('img/redyva.png') }}" width="53" height="53">
      </a>
      <ul class="nav justify-content-end">
        <a class="nav-link text-orange" href="quienes">Quienes <br>somos</a>
        <a class="nav-link text-orange" href="hacen">Qué <br>hacemos</a>
        <a class="nav-link text-orange" href="bolson"> Conseguí <br>tú bolsón</a>
        <a class="nav-link text-orange" href="puntos">Puntos de<br> distribución</a>

      </ul>
    </div>
  </nav>
  <article class="container-sm" id="distribucion">
    <h3>Éstos son los puntos donde <br>podés retirar los bolsones<h3><br><br>
        <div class="row align-items-center">
          <div class="col" id="col">
            B° Villla Urquiza (calle Herrera casi Cabred) Asociación Civil Operación Rescate - &nbsp;Yasmín 3764385245<br><br>
            Sede central del frente PATRIA (Av Tierra del Fuego 1637, entre Rademacher y López Torres) - Anto 3764139629<br><br>
            B° Aeroclub (calle 160 entre 117 y 121 - casa 5810) Comisión Vecinal - CTD Aníbal Verón Nacional - Gonzalo 3764868310 ó Ceci 3764889227<br><br>
            B° El Progreso (Cabildo y Mocona 2575) CTD Aníbal Verón Nacional - Chocha 3764280675<br><br>
            B° Néstor Kirchner (MZ «J» casa 11) CTD Aníbal Verón Nacional - Anita 3764315820<br>

          </div>
          <div class="col" id="col">
            B° Vecinos Unidos (Calle 160 y Costanera Sur) Movimiento 13 de Diciembre - Joselo 3764347758<br><br>

            B° San Lucas (Calle 75C Domingo Mateu 8136) CTD Aníbal Verón Nacional - Nora 3764617018 ó Patricia 3764666661<br><br>

            B° El Porvenir II (MZ «B» lote 3)
            CTD Aníbal Verón Nacional
            Iris 376686078 ó Marianela 3765128412<br><br>
            B° San Isidro "A" (Mz 3 casa 16. Av Fangio) - Yanina 3765060978 <br>

            B° San Isidro "B" (Mz 10 casa 01)
            Erica 3764862545<br>

            B° San Miguel (Av Tambor de Tacuarí y Av 115) - Diego Díaz 3764513605
          </div>
          <div class="col" id="col">
            Centro (Rioja 1766 - entre Buenos Aires y Félix de Azara) Tupac Amaru Misiones - José Hierro 3764842609<br><br>

            B° Yacyreta (Av Blas Parera 5584) Sindic. de Trabajadores Pasivos - María 3764505897<br><br>

            Villa Sarita (Bajada Vieja 1504)
            ARTEFÍMERA - Cristian Krieger 3764325505<br><br>

            B° 508 - Itaembé Guazú
            Rocío Peralta, calle Cocu 5000 (sector verde) 376 417-9915<br><br>

            UDPM (Av. Corrientes 1461) - Adrián Duarte 3764335897<br>
            <hr style=" background-color:  #000000; ">
            <br>
            <strong>Posadas</strong>
          </div>
        </div>
  </article>
  <article class="container-sm">
    <div id='map'>
      <script type="text/javascript">
        //Cargando nuestro mapa
        var markers = [
          ["León", -27.38441, -55.9015],
          ["Zamora", -27.40522, -55.89658],
          ["Aeroclub", -27.4112, -55.95716],
          ["B° El progreso", -27.41117, -55.90818],

        ];
        var zoom = 6;

        var mapsipe = L.map('map').
        setView([-27.3812, -55.9196], 15); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar, en nuestro caso Ibi 
        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
          maxZoom: 14
        }).addTo(mapsipe);

        for (var i = 0; i < markers.length; i++) {
          marker = new L.marker([markers[i][1], markers[i][2]])
            .bindPopup(markers[i][0])
            .addTo(mapsipe);
        }
      </script>

    </div>
  </article>

  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>