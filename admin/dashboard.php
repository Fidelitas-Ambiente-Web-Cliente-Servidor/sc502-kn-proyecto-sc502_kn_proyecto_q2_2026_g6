<?php
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: ../login.php");
    exit();
}

require_once("../includes/conexion.php");

// Consultas para obtener estadísticas
$usuarios = $conn->query("SELECT COUNT(*) AS total FROM usuario")->fetch_assoc()['total'];
$vecinos = $conn->query("SELECT COUNT(*) AS total FROM vecino")->fetch_assoc()['total'];
$reservas = $conn->query("SELECT COUNT(*) AS total FROM reserva")->fetch_assoc()['total'];
$actividades = $conn->query("SELECT COUNT(*) AS total FROM actividad")->fetch_assoc()['total'];
$noticias = $conn->query("SELECT COUNT(*) AS total FROM noticia")->fetch_assoc()['total'];
$contactos = $conn->query("SELECT COUNT(*) AS total FROM contacto")->fetch_assoc()['total'];

include("../layouts/header.php");
include("../layouts/sidebar.php");
?>

<h1>Panel Administrativo</h1>

<p>
Bienvenido,
<strong><?php echo $_SESSION["nombre"] . " " . $_SESSION["apellido"]; ?></strong>
</p>

<div class="dashboard">

    <div class="card-dashboard">
        <h2><?php echo $usuarios; ?></h2>
        <p>Usuarios</p>
    </div>

    <div class="card-dashboard">
        <h2><?php echo $vecinos; ?></h2>
        <p>Vecinos</p>
    </div>

    <div class="card-dashboard">
        <h2><?php echo $reservas; ?></h2>
        <p>Reservas</p>
    </div>

    <div class="card-dashboard">
        <h2><?php echo $actividades; ?></h2>
        <p>Actividades</p>
    </div>

    <div class="card-dashboard">
        <h2><?php echo $noticias; ?></h2>
        <p>Noticias</p>
    </div>

    <div class="card-dashboard">
        <h2><?php echo $contactos; ?></h2>
        <p>Contactos</p>
    </div>

</div>

<?php
include("../layouts/footer.php");
?>