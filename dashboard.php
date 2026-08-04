<?php

session_start();


if(!isset($_SESSION["usuario"])){

    header("Location: views/login.php");

    exit();

}


$usuario = $_SESSION["usuario"];

?>


<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Dashboard ADNA</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<h1>
Sistema ADNA
</h1>


<h2>
Bienvenido:
<?php echo $usuario["nombre"]; ?>
</h2>


<p>
Rol:
<?php echo $usuario["rol"]; ?>
</p>


<a href="views/Vecinos/listar.php">
Gestionar Vecinos
</a>


<br>


<a href="views/Salones/listar.php">
Gestionar Salones
</a>



</body>

</html>