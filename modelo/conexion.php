<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>


<?php

    //Parametros de conexion a la BD
    //DEFINE('USER','root');
    //DEFINE('PW','');
    //DEFINE('HOST','localhost');
    //DEFINE('BD','zapatos' );

    //Conexion a la BD
    //$conexion = mysqli_connect(HOST, USER, PW, BD);
    $conexion = mysqli_connect('localhost', 'root', '', 'zapatos');

    echo "arenas";

    //Establecer caracteres para el hosting
    mysqli_set_charset($conexion,"utf8mb4");

    //verificamos la conexion con la BD
    if(!$conexion)
    {
        die("la conexion a la BD fallo: "+ mysqli_error($conexion));
    }
    else
    {
        die("Conexion exitosa a la BD")
    }
?>