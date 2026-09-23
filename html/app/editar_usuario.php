<?php

include("../../base_datos/login_php/conexion/abrir_conexion.php");

$id = $_GET['id'];

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

    $actualizar = mysqli_query(
        $conexion,
        "UPDATE cuentas_usuarios SET
        nombre='$nombre',
        apellido='$apellido',
        cedula='$cedula',
        correo='$correo',
        institucion='$institucion',
        telefono='$telefono',
        rol='$rol'
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

        <input
            type="text"
            name="institucion"
            value="<?php echo $fila['institucion']; ?>"
        >


        <label>Teléfono</label>

        <input
            type="text"
            name="telefono"
            value="<?php echo $fila['telefono']; ?>"
        >


        <label>Rol</label>

        <input
            type="text"
            name="rol"
            value="<?php echo $fila['rol']; ?>"
            required
        >


        <button type="submit" name="guardar">
            Guardar cambios
        </button>

    </form>

</section>

</body>

</html>