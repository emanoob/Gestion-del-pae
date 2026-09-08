<?php
    session_start();
    include("conexion/abrir_conexion.php");
    
    $correo = $_POST['correo'];
    $contraseña= $_POST['contraseña'];

    $validar_login=mysqli_query($conexion,"SELECT * FROM `$tabla_db1` WHERE correo='$correo' AND contraseña='$contraseña'");

    if (mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] =$correo;
        header("location:../../html/app/app.php");
        include("conexion/cerrar_conexion.php");
        exit;
    }else{
        echo '<script>alert("no coinciden los datos");
        window.location="../../html/iniciarSesion.php"</script>';
        include("conexion/cerrar_conexion.php");
        exit;
    }

?>