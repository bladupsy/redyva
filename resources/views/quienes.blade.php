<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
       
    <title>Redyva</title>
        <style>
             body {
                font-family: 'Montserrat', sans-serif;
               

            }
            #quienes{
                background-image: url("{{ asset('img/quienes.png') }}");
                background-size: cover;
                padding-top: 200px;
                min-height: 850px;

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
          #organizaciones {
              padding-top: 126px;
              min-height: 200px;
          }

          .hr {
            
            
        
          }
          #circulo{
   height:10px;
   width:10px;
   background: rgba(233, 78, 26, 0.2);
   -moz-border-radius:10px;
   -webkit-border-radius:10px;
   border-radius: 10px;
   margin-left: 10px;
   align-items: left;
   
            
}
    #cuadrado {
        width: 324px;
         height: 10px;
          background-color: rgba(233, 78, 26, 0.2);
          -moz-border-radius:15px;
           margin-left:0; 
         border-radius: 0px 5px 5px 0px;
          border-color: rgba(233, 78, 26, 0.2);
          align-items: left;
          
    }
    .font {
        font-family: 'Montserrat', sans-serif;
               
               font-size: 20px;
               font-style: normal;
               font-weight: 400;
               line-height: 24px;
               letter-spacing: -0.01em;
               margin-left: 20px;
               text-align: left;
               align-items: left;
    }
    #icon {
        margin-left: 174px;
        margin-right: 175px;
        height: 172px;
        padding-top: 80px;
        
    }
    #icono {
        margin-left: 220px;
        height: 172px;
        padding-top: 80px;
        
    }
    #ente {
        margin-left: 220px;
        height: 172px;
        padding-top: 80px; 
        min-height: 300px;
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
                        <a class="nav-link text-orange" href="bolson"> Conseguí <br>tú bolsón</a>
                      <a class="nav-link text-orange" href="puntos">Puntos de<br> distribución</a>
        
                    </ul>
                </div>
        </nav>

                <article class="container-fluid" id="quienes">

                </article>
                <article class="container-fluid" id="organizaciones">
                <br>
                <div class="row align-items-center ">
                    <div id="cuadrado" class=""></div>
                    <div id="circulo" class=""></div>
                    <div class="font">&nbsp;Organizaciones sociales </div>
                </div>
                <div class="row align-items-center" id="icon">
                        <div class="col"><img src="{{ asset('img/iconos/A-T.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Sindicato-Trabajadores-Pasivos.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Frente-Patria.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Tupac-Amaru.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Artefimera.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/ATE.png') }}"></div>
                </div>
                <div class="row align-items-center " id="organizaciones">
                    <div id="cuadrado" class=""></div>
                    <div id="circulo" class=""></div>
                    <div class="font">&nbsp;Cooperativas productivas</div>
                </div>
                <div class="row align-items-center" id="icono">
                        <div class="col"><img src="{{ asset('img/iconos/Coop-Mbarete.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Nuestras-Raices.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Las-Tunas.png') }}"></div>
                </div>
                <div class="row align-items-center " id="organizaciones">
                    <div id="cuadrado" class=""></div>
                    <div id="circulo" class=""></div>
                    <div class="font">&nbsp;Entes provinciales</div>
                </div>
                <div class="row align-items-center " id="icono">
                    <div class="col"><img src="{{ asset('img/iconos/Gob.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Coop.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Municipalidad.png') }}"></div>
                    
                </div>
                <div class="row align-items-center " id="organizaciones">
                    <div id="cuadrado" class=""></div>
                    <div id="circulo" class=""></div>
                    <div class="font">&nbsp;Entes nacionales</div>
                </div>
                <div class="row align-items-center " id="ente">
                        <div class="col"><img src="{{ asset('img/iconos/SENASA.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/INTA.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/Gob-Nac.png') }}"></div>
                        <div class="col"><img src="{{ asset('img/iconos/scra.png') }}"></div>
                </div>
                <div class="container-sm" id="organizaciones" ><hr style=" background-color:  #000000; " ></div>
                        
                    </article>
                <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>