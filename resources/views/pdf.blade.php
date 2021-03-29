<head>
<style>
    #idBody{
        padding: 5px;
        margin: 5px;
        border: 4px solid #000;
    }

    h1, h2{
        font-size: 2em;
        color: #fff;
        text-decoration: underline;
        background-color: #e94d1a;
        width: 100%;
        height: 60px;
        padding-top: 6px;
        text-align: center;
    }

    .enlinea{
        display: inline;
        padding: 3px;
    }

    #direc{
        padding-left: 70px;
    }

</style>
</head>
<div id="isBody">
    <h1>Comprobante Pedido</h1>
    <hr>
    <br>
    <br>
    <p class="enlinea">Nombre: <b><?php echo $nom ?></b> </p>
    <p class="enlinea">Apellido: <b><?php echo $ape ?></b> </p>
    <p id="direc" class="enlinea">Direccion: <b><?php echo $dire ?></b> </p>
    <p>Sucursal: <b><?php if($sucu==0){echo "Entrega a Domicilio";} else{echo $sucu;} ?></b> </p>
    <p>Bolson: <b><?php if($bol==3){echo "verde";} else if($bol==2){echo "citrus";}else{echo "pesado";} ?></b> </p><br>
    <hr>
    <h2>RedYvá</h2>
</div>
