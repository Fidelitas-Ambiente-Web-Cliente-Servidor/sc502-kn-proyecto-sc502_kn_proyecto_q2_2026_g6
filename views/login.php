<?php
session_start();

// Si el usuario ya inició sesión, redirigir al Dashboard
if (isset($_SESSION["id_usuario"])) {
    header("Location: admin/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | ADNA</title>

    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="login-container">

    <div class="login-box">

        <h1>ADNA</h1>

        <h2>Asociación de Desarrollo Integral Nuestro Amo</h2>

        <p>Ingrese sus credenciales para acceder al sistema.</p>

       <form action="./includes/validar_login.php" method="POST">

            <div class="campo">

                <label>Correo electrónico</label>

                <input
                    type="email"
                    name="correo"
                    placeholder="correo@ejemplo.com"
                    required>

            </div>

            <div class="campo">

                <label>Contraseña</label>

                <input
                    type="password"
                    name="contrasena"
                    placeholder="********"
                    required>

            </div>

            <button type="submit">
                Iniciar Sesión
            </button>

        </form>

        <?php
        if(isset($_GET["error"])){
            echo "<p class='error'>Correo o contraseña incorrectos.</p>";
        }
        ?>

        <hr>

        <a class="volver" href="index.php">
            ← Volver al sitio principal
        </a>

    </div>

</div>

</body>
</html>