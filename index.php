<?php

include 'conexion.php';

$sql = "SELECT id, nombre, apellido, documento, localidad, email FROM usuarios";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 style="color: #6630f2; text-align: center;">Lista de Usuarios</h2>
        <table class="table table-bordered">
            <thead style="text-align:center";>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Localidad</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody style="text-align:center";>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nombre']}</td>
                                <td>{$row['apellido']}</td>
                                <td>{$row['documento']}</td>
                                <td>{$row['localidad']}</td>
                                <td>{$row['email']}</td>
                                <td>
                                    <a href='update.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                                    <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Eliminar</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay registros</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="text-end">

            <a class="btn btn-primary " href="./create_user.php" role="button">Agregar Usuario</a>
        </div>
    </div>

</body>

</html>

<?php
$conn->close();
?>