<?php
require_once("../db/conexion.php");

$sql = "SELECT * FROM productos";
$stmt = $conn->query($sql);
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($productos);
?>
