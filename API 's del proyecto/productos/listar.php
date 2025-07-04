<?php
// Conexión a la base de datos
require_once(__DIR__ . '/../../db/conexion.php');

try {
    // Consulta todos los productos
    $sql = "SELECT * FROM productos";
    $stmt = $conn->query($sql);
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($productos, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
} catch (PDOException $e) {
    echo json_encode(["error" => "Error al obtener los productos"]);
}
?>
