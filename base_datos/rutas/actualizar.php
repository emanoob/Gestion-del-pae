<?php

header("Content-Type: application/json");

require_once "../informes/conexion/abrir_conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"] ?? null;
    $estado = $_POST["estado"] ?? null;

    if ($id === null || $estado === null) {
        echo json_encode([
            "success" => false,
            "mensaje" => "Faltan datos"
        ]);
        exit;
    }

    $sql = "UPDATE rutas SET estado = ? WHERE id = ?";

    // Aquí estaba el error
    $stmt = $conexion->prepare($sql);

    if (!$stmt) {
        echo json_encode([
            "success" => false,
            "mensaje" => "Error en prepare: " . $conexion->error
        ]);
        exit;
    }

    $stmt->bind_param("ss", $estado, $id);

    if ($stmt->execute()) {

        echo json_encode([
            "success" => true,
            "mensaje" => "Estado actualizado correctamente"
        ]);

    } else {

        echo json_encode([
            "success" => false,
            "mensaje" => "Error al actualizar: " . $stmt->error
        ]);
    }

    $stmt->close();
    $conexion->close();

}

