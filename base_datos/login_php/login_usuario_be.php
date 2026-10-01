<?php
    session_start();
    include("conexion/abrir_conexion.php");
    
    $correo = $_POST['correo'];
    $contrasena= $_POST['contrasena'];
    

    $validar_login=mysqli_query($conexion,"SELECT * FROM `$tabla_db1` WHERE correo='$correo' AND contrasena='$contrasena'");
    $login_array=mysqli_fetch_assoc($validar_login);
    if (mysqli_num_rows($validar_login)>0){
        if($login_array['activa'] !=0){
            $_SESSION['usuario'] =$correo;
            header("location:../../html/app/app.php");
            include("conexion/cerrar_conexion.php");
            exit;
        }else{
            echo '<script>alert("cuenta inabilitada contactate con el admin de tu institucion para habilitarla");
            window.location="../../html/iniciarSesion.php"</script>';
            include("conexion/cerrar_conexion.php");
            exit;
        }
        
    }else{
        echo '<script>alert("no coinciden los datos");
        window.location="../../html/iniciarSesion.php"</script>';
        include("conexion/cerrar_conexion.php");
        exit;
    }

?>