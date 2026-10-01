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
    header("Location:app-admin-cuentas.php");
    exit();
}

$id=$_GET['id'] ?? '';

if($id==""){
    header("Location:app-admin-cuentas.php");
    exit();
}

$sqlc=mysqli_query($conexion,"SELECT * FROM cuentas_usuarios WHERE id='$id'");
$camb=mysqli_fetch_assoc($sqlc);

if($camb['activa']==0){
    $actualizar=mysqli_query(
    $conexion,
    "UPDATE cuentas_usuarios
     SET activa='1'
     WHERE id='$id'"
);
}else{
    $actualizar=mysqli_query(
    $conexion,
    "UPDATE cuentas_usuarios
     SET activa='0'
     WHERE id='$id'"
);
}


header("Location:app-admin-cuentas.php");
exit();

?>