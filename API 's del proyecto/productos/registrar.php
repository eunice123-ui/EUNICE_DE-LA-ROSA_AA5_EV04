<?php
// Conexión a la base de datos
require_once(__DIR__ . '/../../db/conexion.php');

// Obtener datos del body JSON
$data = json_decode(file_get_contents("php://input"), true);

// Validación de campos
if (!isset($data['nombre'], $data['descripcion'], $data['cantidad'], $data['precio'])) {
    echo json_encode(["error" => "Faltan datos del producto"]);
    exit;
}

$nombre = $data['nombre'];
$descripcion = $data['descripcion'];
$cantidad = $data['cantidad'];
$precio = $data['precio'];

try {
    // Preparar e insertar en la base de datos
    $sql = "INSERT INTO productos (nombre, descripcion, cantidad, precio) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nombre, $descripcion, $cantidad, $precio]);

    echo json_encode(["mensaje" => "Producto registrado correctamente"]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Error al registrar el producto"]);
}
?>

