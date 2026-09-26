<?php

header("Content-Type: application/json");

require_once "../informes/conexion/abrir_conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"] ?? null;
    $recorrido = $_POST["recorrido"] ?? null;

    if ($id === null || $recorrido === null || trim($recorrido) === "") {
        echo json_encode([
            "success" => false,
            "mensaje" => "Faltan datos"
        ]);
        exit;
    }

    $sql = "UPDATE rutas SET recorrido = ? WHERE id = ?";

    $stmt = $conexion->prepare($sql);

    if (!$stmt) {
        echo json_encode([
            "success" => false,
            "mensaje" => "Error en prepare: " . $conexion->error
        ]);
        exit;
    }

    $stmt->bind_param("ss", $recorrido, $id);

    if ($stmt->execute()) {

        echo json_encode([
            "success" => true
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
