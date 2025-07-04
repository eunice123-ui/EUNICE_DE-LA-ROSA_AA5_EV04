<?php
// Conexión a la base de datos
require_once(__DIR__ . "/../../db/conexion.php");

// Leer los datos JSON enviados
$data = json_decode(file_get_contents("php://input"), true);

// Validar que todos los campos estén presentes
if (
    !isset($data['nombre']) || empty(trim($data['nombre'])) ||
    !isset($data['correo']) || empty(trim($data['correo'])) ||
    !isset($data['clave']) || empty(trim($data['clave']))
) {
    echo json_encode(["error" => "Faltan datos obligatorios"]);
    exit;
}

// Sanitizar y guardar en variables
$nombre = trim($data['nombre']);
$correo = trim($data['correo']);
$clave = password_hash(trim($data['clave']), PASSWORD_DEFAULT);

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre, correo, clave) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

try {
    $stmt->execute([$nombre, $correo, $clave]);
   echo json_encode(["mensaje" => "Usuario registrado con éxito"], JSON_UNESCAPED_UNICODE);
} catch (PDOException $e) {
    // Comprobación de error por correo duplicado
    if ($e->errorInfo[1] == 1062) {
        echo json_encode(["error" => "El correo ya está registrado"]);
    } else {
        echo json_encode(["error" => "Error en el servidor"]);
    }
}
?>
