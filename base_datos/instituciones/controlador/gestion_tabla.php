<?php
    if(isset($_POST['btn_update'])){
    include("../../informes/conexion/abrir_conexion.php");
    $NewName=$_POST['NewName'];
    $NewDir=$_POST['NewDir'];
    $NewIda=$_POST['NewIda'];
    $Update = $_POST['IDD2'];


    $_UPDATE_SQL =  "UPDATE `instituciones_registradas` SET `nombre institucion`= '$NewName', `direccion` = '$NewDir', `id_administrador` = '$NewIda' WHERE `id`='$Update'";
    mysqli_query($conexion,$_UPDATE_SQL);

    include("../../informes/conexion/cerrar_conexion.php");
    header('Location: ../../../html/app/app-admin-instituciones.php');

    }