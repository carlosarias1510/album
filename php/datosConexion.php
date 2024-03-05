<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "albums";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}
?>
