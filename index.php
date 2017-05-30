<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Yoii</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/animate.css">
    <style type="text/css">
        .item {
            width: 100px;
            height: 100px;
            margin: auto auto;
            font-size: 90px;
            vertical-align: middle;
            font-family: sans-serif;
        }

    </style>
</head>

<body>
    <!--esta es la vaina del preLoad el logo en pantalla antes que el "container" suba-->
    <div class="container" id="container">
        <div class="item animated zoomIn">
            Yoii
        </div>
    </div>
    <!--FIIN DE la vaina del preLoad el logo en pantalla antes que el "container" suba-->
    
<!--GALERIA DE PRODUCTITOS-->
    <?php
    
    include 'conexion.php';
    $re=mysql_query("select * from productos")or die(mysql_error());
    while($f=mysql_fetch_array($re)){
    ?>


        <ul class="galeria">

            <li>
                <a href="#jump"><img src="img/<?php echo $f['imagen'];?>"></a><br>
                <span><?php echo $f['nombre'];?></span>
            </li>

        </ul>

        <div class="modal" id="jump">
            <h3></h3>
            <div class="imagen">
                <a href=""><img src="img/<?php echo $f['imagen'];?>"></a>
            </div>
            <a class="minimizar" href="">X</a>

        </div>
    <?php   
    }
    ?>
    <!--FIINNNN DE GALERIA DE PRODUCTITOS-->



 <!--esta webada hace que todo el "container" suba (banner preload) -->
        <script type="text/javascript">
            var container = document.getElementById('container');
            setTimeout(function() {
                container.classList.add('cerrar');
                document.body.style.overflowY = "visible";
            }, 1000);

        </script>
  <!--FIN DEE la  webada q hace que todo el "container" suba (banner preload) -->      


</body>

</html>
