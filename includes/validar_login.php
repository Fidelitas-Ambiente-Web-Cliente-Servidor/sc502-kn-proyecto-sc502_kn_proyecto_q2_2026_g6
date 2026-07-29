<?php
session_start();

require_once "conexion.php";

// Verificar que el formulario se envió por POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../login.php");
    exit();
}

// Recibir datos del formulario
$correo = trim($_POST["correo"]);
$contrasena = trim($_POST["contrasena"]);

// Buscar usuario por correo
$sql = "SELECT * FROM usuario WHERE correo = ? LIMIT 1";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows == 1) {

    $usuario = $resultado->fetch_assoc();

    // Comparación directa (solo funciona si la contraseña está en texto plano)
    if ($contrasena == $usuario["contrasena"]) {

        $_SESSION["id_usuario"] = $usuario["id_usuario"];
        $_SESSION["nombre"] = $usuario["nombre"];
        $_SESSION["rol"] = $usuario["rol"];

        header("Location: ../admin/dashboard.php");
        exit();

    } else {

        header("Location: ../login.php?error=1");
        exit();

    }

} else {

    header("Location: ../login.php?error=1");
    exit();

}