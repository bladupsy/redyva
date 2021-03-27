<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <title>Redyva</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        #iconoFecha {
            color: #e94d1a;
        }

        .fondo-inicio {
            background-image: url("{{ asset('img/cilantro.png') }}");
            background-size: cover;
            padding-top: 200px;
            min-height: 850px;

        }

        .parte1 {
            font-family: 'Montserrat', sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 24px;
            letter-spacing: -0.01em;
        }

        .text {
            font-family: 'Montserrat', sans-serif;
            position: absolute;
            width: 743px;
            font-size: 73px;
            text-align: left;

            line-height: 77px;
            letter-spacing: -0.045em;

        }

        .naranja {
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

        .etiqueta {
            font-size: 30px;
            color: white;
            font-weight: italic;
        }

        .conoce {
            margin-top: 245px;
        }

        .video {
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

        .footer {
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
            font-family: 'Montserrat', sans-serif;
            font-style: normal;
            font-size: 26px;
            line-height: 27px;
            /* or 27px */
            letter-spacing: -0.05em;
        }

        #myModal {
            font-family: 'Montserrat', sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 26px;
            line-height: 32px;
            /* identical to box height */
            letter-spacing: -0.03em;
        }

        .hello {
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
            font-family: 'Montserrat', sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 26px;
            line-height: 32px;

            /* identical to box height */
            letter-spacing: -0.01em;
        }

        .compra {
            margin-top: 280px;
        }

        .line {
            width: 15%;
            height: 10px;
            background-color: #B7451C;
            text-align: left;
            margin-left: 0;
            border-radius: 5px 5px 5px 5px;
        }

        .line-icon {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            padding: 0.75rem;
            border-top: 1px dashed #000 !important;
        }

        .grupo-botones {
            margin-left: 60px;
        }

        #linkPuntos {
            margin-bottom: 15px;
            margin-left: -20px;
            font-weight: bold;
        }

        .linkVarios:hover {
            transition: .4s;
            text-decoration: none;
            font-size: 40px;
        }

        .pie-pagina {
            background-color: #e94d1a;
            min-height: 75px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fondo-form {
            background-image: url("{{ asset('img/chacra.png') }}");
            background-size: cover;
            padding-top: 200px;
            min-height: 850px;
        }

        .formulario-pomelo {
            margin-left: 550px;
            padding-bottom: -5px;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;

        }

        .formulario-contacto {
            margin-left: 100px;
        }

        .center-misiones {
            align-items: center;
            text-align: center;
            padding-top: 15px;
        }

        .boton-form {
            margin-left: 320px;
            margin-top: 15px;
        }

        #btn-submit{
            margin-right: 35px;
        }

    </style>
</head>

<body>


    <nav id="nav-cabecera"  class="navbar navbar-light ">
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
    <article class="container-fluid fondo-inicio">
        <div class="container-sm">
            <a class="btn btn-light text-orange rounded-pill parte1">Somos una red que<strong> produce, distribuye y comercializa</strong> con sentido político</a>
            <br>
            <br>
            <p class="text-light text"><strong>Queremos acercarte productos sanos, frescos y locales</strong></p>


            <div class="container compra">
                <a class="btn btn-orange text-light rounded-pill parte2" href="producto" data-toggle="modal" data-target="#myModal">encargá tú bolsón</a>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">seleccioná tu bolsón</h4>
                                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                            </div>
                            <div class="modal-body grupo-botones">

                                <p><a href="pesado" role="button" class="btn btn-outline-orange text-dark rounded-pill hello"><b>pesado<b></a>
                                    <a href="citrus" role="button" class="btn btn-outline-orange text-dark rounded-pill hello"><b>citrus<b></a>
                                    <a href="verde" role="button" class="btn btn-outline-orange text-dark rounded-pill hello"><b>verde<b></a>

                                </p>
                            </div>
                            <div class="modal-footer ">
                                <div class="entrega">
                                    <h4 class="">se entregan: los viernes<h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="container-fluid naranja">
        <div class="container-sm">
            <hr class="line">
            <a class="etiqueta linkVarios">desde el 2020</a>

            <p class="texto text-light">Nos encontramos organizaciones <br>sociales, cooperativas productivas,<br> trabajadores y trabajadoras del agro, todos bajo la consigna de proveer alimentos sanos.</p>
            <div class="conoce">
                <hr class="line">
                <a class="etiqueta linkVarios" href="hacen">conoce más</a>
            </div>

        </div>
    </article>
    <article class="container-fluid video">

    </article>
    <article class="container-sm map">
        <div class="container-sm row justify-content-between pizzarra mx-auto">
            <div class="col-4"><br><br><br>
                <a id="linkPuntos" type="button" class="btn btn-outline-orange rounded-pill" href="puntos">Áca podés encontrar los <br> puntos de distribución</a>
                <br>
                <p class="text-orange"><strong><i id="iconoFlecha" class="fas fa-angle-right"></i> Posadas</strong></p>
            </div>
            <div class="col-4 "><img src="{{ asset('img/pizzarra.png') }}" width="156px" height="156px" style="margin-left: 130px;"></div>
        </div>
        <div id='map'>
            <script type="text/javascript">
                //Cargando nuestro mapa
                var markers = [
                    ["B° Villa Urquiza", -27.38441, -55.9015],
                    ["Sede Central", -27.40522, -55.89658],
                    ["Aeroclub", -27.4112, -55.95716],
                    ["B° El progreso", -27.41117, -55.90818],
                    ["B°  Néstor Kirchner, -27.4532, -55.9335"],
                    ["B° Vecinos unidos, -27.40060, -55.892313"],
                    ["hola", -27.40060, -55.892313],

                ];
                var zoom = 10;

                var mapsipe = L.map('map').
                setView([-27.3812, -55.9196], 15); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar, en nuestro caso Ibi 
                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
                    maxZoom: 15
                }).addTo(mapsipe);

                for (var i = 0; i < markers.length; i++) {
                    marker = new L.marker([markers[i][1], markers[i][2]])
                        .bindPopup(markers[i][0])
                        .addTo(mapsipe);
                }
            </script>

        </div>
    </article>
    <article class="container-fluid fondo-form">
        <div class="card mb-3 formulario-pomelo" style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src=" {{ asset('img/pomelo.png')}}" height="375px;">
                </div>
                <div class="col-md-8">
                    <div class="card-body formulario-contacto">
                        <h5 class="card-title">Contacto</h5>
                        <hr>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Nombre</label>
                                <input placeholder="Deja tu Nombre" type="text" class="form-control" id="validationCustom01" value="" required>
                                <div class="valid-feedback">
                                    Muy bien!
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback">
                                    Muy bien!
                                </div>
                            </div> -->
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input placeholder="Deja tu correo" type="email" class="form-control" id="validationCustom03" value="" required>
                                <div class="valid-feedback">
                                    Muy bien!
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="validationTextarea" class="form-label">Comentario</label>
                                <textarea class="form-control" id="validationTextarea" placeholder="Deja tu comentario" required></textarea>
                                <div class="valid-feedback">
                                    Muy bien!
                                </div>
                            </div>

                            <div id="btn-submit" class="col-12">
                                <button class="btn btn-success rounded-pill boton-form" type="submit">Enviar</button>
                            </div>
                        </form>
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict'

                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.querySelectorAll('.needs-validation')

                                // Loop over them and prevent submission
                                Array.prototype.slice.call(forms)
                                    .forEach(function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (!form.checkValidity()) {
                                                event.preventDefault()
                                                event.stopPropagation()
                                            }

                                            form.classList.add('was-validated')
                                        }, false)
                                    })
                            })();
                        </script>
                    </div>
                </div>
            </div>
        </div>

    </article>
    <article class="container-fluid footer">
        <div class="container fondo-icon">
            <hr class="line-icon">
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
            </div>
            <hr class="line-icon">

        </div>
    </article>

    <footer class="container-fluid pie-pagina">
        <h5 class="text-light center-misiones">Hecho con esfuerzo y cariño desde Misiones</h5>
    </footer>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>