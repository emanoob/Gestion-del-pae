<?php

session_start();

include("../../base_datos/login_php/conexion/abrir_conexion.php");

if(!isset($_SESSION['usuario'])){
    header("Location: ../iniciarSesion.php");
    exit();
}

$usuario=$_SESSION['usuario'];

$consulta=mysqli_query(
    $conexion,
    "SELECT * FROM cuentas_usuarios WHERE correo='$usuario'"
);

$arrayUsur=mysqli_fetch_assoc($consulta);

if($arrayUsur['rol']!="ADP"){
    header("Location: ../app-admin-cuentas.php");
    exit();
}

$id=$_GET['id'] ?? '';

if($id==""){
    header("Location: ../app-admin-cuentas.php");
    exit();
}

$actualizar=mysqli_query(
    $conexion,
    "UPDATE cuentas_usuarios
     SET rol='ADI'
     WHERE id='$id'"
);

header("Location: ../app-admin-cuentas.php");
exit();

?>