<?php
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: ../../login.php");
    exit();
}

require_once("../../includes/conexion.php");

$sql = "SELECT * FROM vecino ORDER BY apellido, nombre";
$resultado = $conn->query($sql);

include("../../layouts/header.php");
include("../../layouts/sidebar.php");
?>

<h1>Gestión de Vecinos</h1>

<p>
    <a href="agregar.php" class="btn-agregar">
        + Registrar vecino
    </a>
</p>

<table class="tabla">

    <thead>

        <tr>
            <th>ID</th>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>

    <?php while($fila = $resultado->fetch_assoc()){ ?>

        <tr>

            <td><?= $fila["id_vecino"] ?></td>

            <td><?= htmlspecialchars($fila["cedula"]) ?></td>

            <td><?= htmlspecialchars($fila["nombre"]) ?></td>

            <td><?= htmlspecialchars($fila["apellido"]) ?></td>

            <td><?= htmlspecialchars($fila["telefono"]) ?></td>

            <td><?= htmlspecialchars($fila["correo"]) ?></td>

            <td>
                <a href="editar.php?id=<?= $fila["id_vecino"] ?>">Editar</a> |
                <a href="eliminar.php?id=<?= $fila["id_vecino"] ?>" onclick="return confirm('¿Desea eliminar este vecino?');">Eliminar</a>
            </td>

        </tr>

    <?php } ?>

    </tbody>

</table>

<?php
include("../../layouts/footer.php");
?>