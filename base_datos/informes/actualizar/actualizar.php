<?php
    include("../conexion/abrir_conexion.php");

    if (isset($_POST['delete'])){
        include("../conexion/abrir_conexion.php");

        $Del=$_POST['IDD'];
        mysqli_query($conexion,"DELETE FROM `$tabla_db1` WHERE id = '$Del'");
        include("../conexion/cerrar_conexion.php");

        header('location:../../../html/app/app.php');
    }
?>