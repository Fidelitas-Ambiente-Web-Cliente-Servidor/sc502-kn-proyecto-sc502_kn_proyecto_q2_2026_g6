<?php

require_once './config/database.php';

$database = new Database();

$conexion = $database->connect();

$sql = "SELECT * FROM actividad";

$resultado = $conexion->query($sql);

$actividades = $resultado->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba de Base de Datos</title>
</head>

<body>

<h1>Actividades</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Lugar</th>
            <th>Estado</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($actividades as $actividad): ?>

            <tr>
                <td><?= $actividad['id_actividad'] ?></td>
                <td><?= $actividad['nombre'] ?></td>
                <td><?= $actividad['descripcion'] ?></td>
                <td><?= $actividad['fecha'] ?></td>
                <td><?= $actividad['hora'] ?></td>
                <td><?= $actividad['lugar'] ?></td>
                <td><?= $actividad['id_estado'] ?></td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>

</body>
</html>