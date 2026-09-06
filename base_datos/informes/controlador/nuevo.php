<?php
    if(isset($_POST['btn_send_inf'])) {
        

        include("../../informes/conexion/abrir_conexion.php");

        $PlEntr=$_POST['PlEntr'];
        $desper=$_POST['desper'];
        $fecha=$_POST['fecha'];
        $hora=$_POST['hora'];
        $CedUsu="902920";
        $NomUs='emanuel';
        $reportes='';

        $sql = "INSERT INTO `$tabla_db1`
            (`nombre`, `cedula`, `platos entregados`, `fecha`, `hora`,  `desperdicios`)
            VALUES
            ('$NomUs', '$CedUsu', '$PlEntr', '$fecha', '$hora', '$desper')";

    if (mysqli_query($conexion, $sql)) {

        include("../../conexion/cerrar_conexion.php");

        header('Location: ../../../html/app/app.php');
        exit;

    } else {

        die("Error al insertar el informe: " . mysqli_error($conexion));
    }
    }


?>