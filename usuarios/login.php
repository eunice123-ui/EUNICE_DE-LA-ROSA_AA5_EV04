<?php
require_once("../db/conexion.php");

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['correo'], $data['clave'])) {
    echo json_encode(["error" => "Faltan datos"]);
    exit;
}

$correo = $data['correo'];
$clave = $data['clave'];

$sql = "SELECT * FROM usuarios WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$correo]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($clave, $user['clave'])) {
    echo json_encode(["mensaje" => "Login exitoso", "usuario" => $user['nombre']]);
} else {
    echo json_encode(["error" => "Credenciales incorrectas"]);
}
?>
