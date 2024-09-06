<?php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $localidad = $_POST['localidad'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nombre, apellido, documento, localidad, email) VALUES ('$nombre', '$apellido', '$documento', '$localidad', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-danger'>Registro Cargado Exitosamente </div>";
        exit();     
    } 
    else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
}
?>