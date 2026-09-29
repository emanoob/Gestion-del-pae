<?php
include("../../base_datos/login_php/conexion/abrir_conexion.php");
session_start();




if(isset($_SESSION['usuario'])){
        $usuario=$_SESSION['usuario'];
        $UsurTablaSql="SELECT * FROM cuentas_usuarios WHERE correo= '$usuario'";
        $UsurTabla=mysqli_query($conexion ,$UsurTablaSql);
        $usurTablaArr=mysqli_fetch_assoc($UsurTabla);
        $rol=$usurTablaArr['rol'];

    }

?>
<?php

$id = trim($_GET['id'] ?? '');
$type = $_GET['type'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $confirmacion = $_POST['confirmacion'] ?? '0';

    if ($confirmacion === '1') {

        $eliminar_sql = "DELETE FROM cuentas_usuarios WHERE id='$id'";
        $sql = mysqli_query($conexion, $eliminar_sql);

        if ($sql) {
            echo "1";
        } else {
            echo "ERROR";
        }

    } else {

        echo "0";
    }

    exit;
}
?>

<?php if ($type === 'borrar') { ?>

<script>

const confirmacion = confirm("¿Seguro quieres borrar?");

fetch(window.location.href, {
    method: "POST",
    headers: {
        "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "confirmacion=" + (confirmacion ? "1" : "0")
})
.then(response => response.text())
.then(data => {

    console.log("Respuesta PHP:", data);

    if (data.trim() === "1") {

        // Se eliminó correctamente
        window.location.href = "app-admin-cuentas.php";

    } else if (data.trim() === "0") {

        // Canceló
        window.location.href = "app-admin-cuentas.php";

    } else {

        console.log("Respuesta inesperada:", data);
    }

})
.catch(error => {
    console.error("Error:", error);
});

</script>

<?php } 
 



$consulta = mysqli_query(
    $conexion,
    "SELECT * FROM cuentas_usuarios WHERE id='$id'"
);

$fila = mysqli_fetch_assoc($consulta);

if (!$fila) {
    die("Usuario no encontrado");
}


if (isset($_POST['guardar'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $institucion = $_POST['institucion'];
    $telefono = $_POST['telefono'];
    $rol = $_POST['rol'];
    $contraseña=$_POST['contrasena'];

    $actualizar = mysqli_query(
        $conexion,
        "UPDATE cuentas_usuarios SET
        nombre='$nombre',
        apellido='$apellido',
        cedula='$cedula',
        correo='$correo',
        institucion='$institucion',
        telefono='$telefono',
        rol='$rol',
        contrasena='$contraseña'
        WHERE id='$id'"
    );

    if ($actualizar) {

        echo "<script>
                alert('Los datos se actualizaron correctamente');
                window.location='app-admin-cuentas.php';
              </script>";

    } else {

        echo "Error al actualizar: " . mysqli_error($conexion);

    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar usuario</title>

    <link rel="stylesheet" href="../../css/estilo.css">

</head>

<body>

<section class="formulario-editar">

    <h2>Editar usuario</h2>

    <form method="POST">

        <label>Nombre</label>

        <input
            type="text"
            name="nombre"
            value="<?php echo $fila['nombre']; ?>"
            required
        >


        <label>Apellido</label>

        <input
            type="text"
            name="apellido"
            value="<?php echo $fila['apellido']; ?>"
            required
        >


        <label>Cédula</label>

        <input
            type="text"
            name="cedula"
            value="<?php echo $fila['cedula']; ?>"
            required
        >


        <label>Correo</label>

        <input
            type="email"
            name="correo"
            value="<?php echo $fila['correo']; ?>"
            required
        >


        <label>Institución</label>

        <?php
        if($rol=='ADP'){
            echo '<input type="text" name="institucion" value="'.$fila['institucion'].'">';
            }else{
                echo 'No tienes permitido modificar esto';
                echo '<input type="hidden" name="institucion" value="'.$fila['institucion'].'">';
            }
        ?>
        


        <label>Teléfono</label>

        <input
            type="text"
            name="telefono"
            value="<?php echo $fila['telefono']; ?>"
        >


        <label>Rol</label>

        <?php
        if($rol=='ADP'){
            echo '<input type="text" name="rol" value="'.$fila['rol'].'" required>';
            }else{
                echo 'No tienes permitido modificar esto';
                echo '<input type="hidden" name="rol" value="'.$fila['rol'].'" required>';
            }
        ?>
        <label>Contraseña</label>
        <input
            type="text"
            name="contraseña"
            value="<?php echo $fila['contrasena']; ?>"
        >


        <button type="submit" name="guardar">
            Guardar cambios
        </button>

    </form>

</section>

</body>

</html>