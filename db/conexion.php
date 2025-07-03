<?php
$host = "localhost";
$dbname = "inventario_db";
$user = "root";
$pass = ""; // deja vacío si no tienes contraseña en MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // Activa los errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
?>
