<?php
require_once("../db/conexion.php");

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['nombre'], $data['correo'], $data['clave'])) {
    echo json_encode(["error" => "Faltan datos"]);
    exit;
}

$nombre = $data['nombre'];
$correo = $data['correo'];
$clave = password_hash($data['clave'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, correo, clave) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

try {
    $stmt->execute([$nombre, $correo, $clave]);
    echo json_encode(["mensaje" => "Usuario registrado con éxito"]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Correo ya registrado"]);
}
?>
