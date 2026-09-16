<?php

    $host = "localhost";
    $basededatos = "gestion_pae";
    $usuariodb = "root";//nombre del usuario del servidor
    $clavedb="";//si la base de datos no tiene clave dejarlo vacio.

    $tabla_db1="informes";

<<<<<<< HEAD
    $conexion = new mysqli($host, $usuariodb,$clavedb,$basededatos);
=======
    $conexion = new mysqli($host, $usuariodb,$clavedb,$basededatos,);
    
     /*desde aqui y el 3307 lo borro cuando lo cierro
>>>>>>> ff04e86eb28cd16111c8a524be97ff9d95270339
    if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa"; */
 
?>
