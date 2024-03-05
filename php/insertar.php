<?php
include 'datosConexion.php';
$data = json_decode(file_get_contents("php://input"));

if ($data) {
    $valores = json_encode($data->aGuardar);
    $sql = "TRUNCATE TABLE albumes";
    $conn->query($sql);
    $sql = "INSERT INTO albumes (imags) VALUES ('$valores')";
    $conn->query($sql);
}
$conn->close();
?>
