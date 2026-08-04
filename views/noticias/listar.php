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


<title>Administrar Actividades | ADNA</title>


<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>


<body>


<?php include("includes/header.php"); ?>



<div class="dashboard-content">


<h1>
Administración de Actividades
</h1>



<a href="agregar.php" class="btn-more">

➕ Agregar Actividad

</a>



<br><br>



<section class="info">


<h2>
Listado de Actividades
</h2>



<table>


<thead>

<tr>

<th>
Nombre
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


<th>
Acciones
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



<td>


<a href="editar.php?id=<?php echo $actividad['id_actividad']; ?>">

✏️ Editar

</a>


<br><br>


<a 
href="eliminar.php?id=<?php echo $actividad['id_actividad']; ?>"
onclick="return confirm('¿Desea eliminar esta actividad?');">

🗑️ Eliminar

</a>


</td>


</tr>


<?php } ?>


</tbody>


</table>



</section>



</div>



<?php include("includes/footer.php"); ?>


</body>


</html>