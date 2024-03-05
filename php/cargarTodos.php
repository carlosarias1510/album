<?php
include 'datosConexion.php';
$sql="SELECT imags FROM albumes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $jsonData = json_encode($row['imags']);
    echo $jsonData;
}
$conn->close();
?>
