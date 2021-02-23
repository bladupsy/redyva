<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}" type="text/css">  
    <title>RedyVa</title>
    <style>
        #hero {
           background-image: url(../img/lemon.jpg);
          background-size: cover;
          padding-top: 250px;
              min-height: 800px;
             color: var(--white-color);
       }

          #hero p {
          color: var(--white-color);
          } 

         #tareas {
            background-size: cover;
            padding-top: 90px;
            min-height: 500px;
         }

         .navbar {
          min-height: 100px;

         }

      
    </style>

  
  </head>
  <body>
    <!--Menu-->
        <nav class="navbar navbar-expand-lg fixed-top bg-light">
            <div  class="container">
                <a class="navbar-brand text-orange" href="#"> Redyva
                    <!--<img src="" alt="" width="50" height="50" class="d-inline-block align-top">-->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/menu.svg">
            </button>
               
                
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link text-orange" aria-current="page" href="#">Quiénes somos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-orange" href="tareas">Qué hacemos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-orange" href="#">Conseguí tú bolsón</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-orange" href="#">Puntos de distribución</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link  btn btn-outline-orange rounded-pill" href="#" tabindex="-1" aria-disabled="true">Inicio de sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="hero">
          <div class="container-sm">
              <div class=" col-sm-8">
                <h1 class=" mt-5 text-light">Queremos acercarte productos sanos, frescos y locales.</h1>
                <p class="text-light">Somos una red que produce, distribuye y comercializa con sentido político.</p>
                <a href="#" class=" mt-4 btn btn btn-outline-orange rounded-pill text-light">Encargá tú bolsón</a>
            
              </div> 
          </div>
        </section>
        <section id="tareas" class="tareas bg-orange">
          <div class="container-sm">
              <div class="col-sm-10">
                <hr   style="color: white;" width="20%" size="30"  />
                <a class="text-light">Desde el 2020</a>
                <h1 class="mt-5 text-light">Nos encontramos organizaciones sociales, cooperativas productivas, trabajadores y trabajadoras del agro, todos bajo la consigna de proveer alimentos sanos.</h1>
                <br><a class="btn text-light" >Conocer más</a>
              </div>

          </div>

        </section>
        <script src="{{mix('js/app.js')}}" type="text/javascript"></script>
   </body>
   

       
       
  
        
      


