<?php

require_once("controllers/ActividadController.php");


$controlador = new ActividadController();

$actividades = $controlador->listar();


?>


<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Actividades ADNA</title>


<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>


<body>


<?php include("includes/header.php"); ?>



<section class="hero">

<div class="hero-overlay">


<div class="hero-text">


<h1>
Actividades Comunitarias
</h1>


<p>
Conozca las actividades organizadas por la Asociación de Desarrollo Integral Nuestro Amo.
</p>


</div>


</div>


</section>




<section class="info">


<h2>
Próximas Actividades
</h2>



<table>


<thead>

<tr>

<th>
Actividad
</th>


<th>
Descripción
</th>


<th>
Fecha
</th>


<th>
Hora
</th>


<th>
Lugar
</th>


</tr>

</thead>




<tbody>


<?php foreach($actividades as $actividad){ ?>


<tr>


<td>

<?php echo $actividad["nombre"]; ?>

</td>



<td>

<?php echo $actividad["descripcion"]; ?>

</td>



<td>

<?php echo $actividad["fecha"]; ?>

</td>



<td>

<?php echo $actividad["hora"]; ?>

</td>



<td>

<?php echo $actividad["lugar"]; ?>

</td>



</tr>


<?php } ?>


</tbody>


</table>



</section>




<?php include("includes/footer.php"); ?>


</body>


</html>