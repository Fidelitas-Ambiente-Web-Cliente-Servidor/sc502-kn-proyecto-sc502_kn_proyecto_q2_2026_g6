<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: views/login.php");
    exit();
}

$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo | ADNA</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<header class="dashboard-header">

    <div class="logo-dashboard">

        <img src="img/logo.png" alt="Logo ADNA">

        <div>
            <h2>ADNA</h2>
            <small>Sistema de Gestión Comunitaria</small>
        </div>

    </div>

    <div class="usuario">

        <strong><?php echo $usuario["nombre"]; ?></strong><br>
        <span><?php echo $usuario["rol"]; ?></span>

    </div>

</header>

<div class="dashboard">

    <aside class="sidebar">

        <h3>Menú</h3>

        <a href="dashboard.php">🏠 Dashboard</a>

        <a href="views/Vecinos/listar.php">👥 Vecinos</a>

        <a href="views/Salones/listar.php">🏢 Salones</a>

        <a href="views/Reservas/listar.php">📅 Reservas</a>

        <a href="views/Noticias/listar.php">📰 Noticias</a>

        <a href="views/Actividades/listar.php">🎉 Actividades</a>

        <a href="logout.php">🚪 Cerrar sesión</a>

    </aside>

    <main class="contenido">

        <h1>Bienvenido al Panel Administrativo</h1>

        <p>
            Desde este panel podrá administrar la información de la
            Asociación de Desarrollo Integral Nuestro Amo.
        </p>

        <div class="cards-dashboard">

            <div class="card-dashboard">
                <h3>👥 Vecinos</h3>
                <p>Administrar el registro de vecinos.</p>
            </div>

            <div class="card-dashboard">
                <h3>🏢 Salones</h3>
                <p>Gestionar los salones comunales.</p>
            </div>

            <div class="card-dashboard">
                <h3>📅 Reservas</h3>
                <p>Control de reservas y disponibilidad.</p>
            </div>

            <div class="card-dashboard">
                <h3>📰 Noticias</h3>
                <p>Publicar noticias y comunicados.</p>
            </div>

            <div class="card-dashboard">
                <h3>🎉 Actividades</h3>
                <p>Administrar actividades comunitarias.</p>
            </div>

        </div>

    </main>

</div>

</body>
</html>