<?php
// Conexión a la base de datos
require_once(__DIR__ . '/../../db/conexion.php');

// Obtener los datos del cuerpo de la solicitud en formato JSON
$data = json_decode(file_get_contents("php://input"), true);

// Validar que se reciban los campos necesarios
if (!isset($data['correo'], $data['clave'])) {
    echo json_encode(["error" => "Faltan datos"]);
    exit;
}

$correo = $data['correo'];
$clave = $data['clave'];

try {
    // Consultar si el usuario existe
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$correo]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar contraseña
    if ($user && password_verify($clave, $user['clave'])) {
        echo json_encode([
            "mensaje" => "Login exitoso",
            "usuario" => $user['nombre']
        ], JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(["error" => "Credenciales incorrectas"]);
    }

} catch (PDOException $e) {
    echo json_encode(["error" => "Error en la base de datos"]);
}
?>

