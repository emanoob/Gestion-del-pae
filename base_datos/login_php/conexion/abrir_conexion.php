<?php

    $host = "localhost";
    $basededatos = "gestion_pae";
    $usuariodb = "root";//nombre del usuario del servidor
    $clavedb="";//si la base de datos no tiene clave dejarlo vacio.

    $tabla_db1="cuentas_usuarios";

    $conexion = new mysqli($host, $usuariodb,$clavedb,$basededatos);

?>
