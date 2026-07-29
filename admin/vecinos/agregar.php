<?php
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: ../../login.php");
    exit();
}

require_once("../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $cedula = trim($_POST["cedula"]);
    $telefono = trim($_POST["telefono"]);
    $correo = trim($_POST["correo"]);
    $direccion = trim($_POST["direccion"]);

    $sql = "INSERT INTO vecino
    (nombre, apellido, cedula, telefono, correo, direccion, id_estado)
    VALUES (?, ?, ?, ?, ?, ?, 1)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssss",
        $nombre,
        $apellido,
        $cedula,
        $telefono,
        $correo,
        $direccion
    );

    if ($stmt->execute()) {

        header("Location: listar.php");

        exit();

    } else {

        $error = "No fue posible registrar el vecino.";

    }

}

include("../../layouts/header.php");
include("../../layouts/sidebar.php");
?>

<h1>Registrar Vecino</h1>

<?php
if(isset($error)){
    echo "<p style='color:red;'>$error</p>";
}
?>

<form method="POST">

    <label>Nombre</label>

    <input
        type="text"
        name="nombre"
        required>

    <label>Apellido</label>

    <input
        type="text"
        name="apellido"
        required>

    <label>Cédula</label>

    <input
        type="text"
        name="cedula"
        required>

    <label>Teléfono</label>

    <input
        type="text"
        name="telefono">

    <label>Correo</label>

    <input
        type="email"
        name="correo">

    <label>Dirección</label>

    <textarea
        name="direccion"
        rows="4"></textarea>

    <br><br>

    <button class="btn-agregar">

        Guardar Vecino

    </button>

    <a href="listar.php">

        Cancelar

    </a>

</form>

<?php
include("../../layouts/footer.php");
?>