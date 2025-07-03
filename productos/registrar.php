<?php
require_once("../db/conexion.php");

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['nombre'], $data['descripcion'], $data['cantidad'], $data['precio'])) {
    echo json_encode(["error" => "Faltan datos del producto"]);
    exit;
}

$sql = "INSERT INTO productos (nombre, descripcion, cantidad, precio) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([
    $data['nombre'],
    $data['descripcion'],
    $data['cantidad'],
    $data['precio']
]);

echo json_encode(["mensaje" => "Producto registrado"]);
?>
