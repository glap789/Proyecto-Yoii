<?php 
    $server="localhost";
    $username="root";
    $password="";
    $db='yoii';
    $con=mysql_connect($server,$username,$password)or die("Se murió");   $sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>