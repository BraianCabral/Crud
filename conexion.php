<?php

$servername = "localhost";
$username = "upso_crud";
$password = "upso";
$dbname = "upso_crud";

// Creando la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>