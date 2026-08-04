<?php

require_once("controllers/ActividadController.php");

$controlador = new ActividadController();


if(isset($_POST["guardar"])) {


    $datos = [

        "nombre" => $_POST["nombre"],

        "descripcion" => $_POST["descripcion"],

        "fecha" => $_POST["fecha"],

        "hora" => $_POST["hora"],

        "lugar" => $_POST["lugar"],

        "id_estado" => 1

    ];


    $controlador->guardar($datos);


    header("Location: listar.php");
    exit();

}


?>


<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Agregar Actividad | ADNA</title>


<link rel="stylesheet" href="css/style.css">


</head>


<body>


<?php include("includes/header.php"); ?>



<div class="dashboard-content">


<h1>
Agregar Nueva Actividad
</h1>



<section class="info">


<form method="POST">



<label>
Nombre de la actividad
</label>

<br>

<input 
type="text"
name="nombre"
required>



<br><br>



<label>
Descripción
</label>

<br>


<textarea 
name="descripcion"
required></textarea>



<br><br>



<label>
Fecha
</label>

<br>


<input 
type="date"
name="fecha"
required>



<br><br>



<label>
Hora
</label>

<br>


<input 
type="time"
name="hora"
required>



<br><br>



<label>
Lugar
</label>

<br>


<input 
type="text"
name="lugar"
required>



<br><br>



<button 
type="submit"
name="guardar"
class="btn-more">

Guardar Actividad

</button>



</form>



</section>



</div>



<?php include("includes/footer.php"); ?>


</body>

</html>