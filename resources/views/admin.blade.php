<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Administrador Redyva</title>
    <style>
        body {
            font-family: sans-serif;
            background-image: url("{{ asset('img/chacra.png') }}");
            background-size: cover;
        }

        .box {
            width: 500px;
            position: absolute;
            top: 25%;
            left: 35%;
            background: #fff;
            text-align: center;
            transition: 0.25s;
        }

        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px 10px;
            width: 250px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s
        }

        .box h1 {
            color: #000;
            text-transform: uppercase;
            font-weight: 500
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            width: 300px;
            border-color: #2ecc71;
        }

        .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer
        }

        .box input[type="submit"]:hover {
            background: #2ecc71
        }

        .forgot {
            text-decoration: underline
        }

        ul.social-network {
            list-style: none;
            display: inline;
            margin-left: 0 !important;
            padding: 0
        }

        ul.social-network li {
            display: inline;
            margin: 0 5px
        }

        .social-network a.icoFacebook:hover {
            background-color: #3B5998
        }

        .social-network a.icoTwitter:hover {
            background-color: #33ccff
        }

        .social-network a.icoGoogle:hover {
            background-color: #BD3518
        }

        .social-network a.icoFacebook:hover i,
        .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i {
            color: #fff
        }

        a.socialIcon:hover,
        .socialHoverClass {
            color: #44BCDD
        }

        .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto 0 auto;
            border-radius: 50%;
            text-align: center;
            width: 50px;
            height: 50px;
            font-size: 20px
        }

        .social-circle li i {
            margin: 0;
            line-height: 50px;
            text-align: center
        }

        .social-circle li a:hover i,
        .triggeredHover {
            transform: rotate(360deg);
            transition: all 0.2s
        }

        .social-circle i {
            color: #fff;
            transition: all 0.8s;
            transition: all 0.8s
        }

        #btn-send{
            color: #2ecc71;
        }
        #btn-send:hover{
            color: #fff;
        }
        #titulo{
            color: #e94d1a;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="">
            <div class="">
                <div class="card">
                <form onsubmit="event.preventDefault()" class="box">
                        <h1 id="titulo">Login</h1>
                        <p class="text-muted"> </p>
                        <input id="user" type="text" name="" placeholder="Usuario">
                        <input id="pass" type="password" name="" placeholder="Contraseña">
                        <a class="forgot text-muted" href="#">Forgot password?</a>
                        <input id="btn-send" type="submit" name="" value="Login" href="#" class="text-orange">
                        <meta name="csrf-token" content="<?php echo csrf_token()?>">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){

            $('btn-send').click(function(){
                
            let usuario = $('#user').val();
            let contrasena = $('#pass').val();

            $.ajax({
                url: 'log',
                type: 'post',
                data: {
                    usuario : usuario,
                    contrasena : contrasena
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    console.log(response);
                },
                error: function(){
                    alert("No existe el usuario o Puso mal la password")
                }

                })
            })
        })

    </script>
</body>
</html>