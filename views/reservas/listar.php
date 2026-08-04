<?php

require_once("../controllers/ReservaController.php");


$controlador = new ReservaController();


$reservas = $controlador->listar();


?>


<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Reservas ADNA</title>

<link rel="stylesheet" href="../css/style.css">

</head>


<body>


<?php include("../includes/header.php"); ?>


<div class="dashboard-content">


<h1>
Administración de Reservas
</h1>



<a href="agregar.php" class="btn-more">

➕ Nueva Reserva

</a>


<br><br>



<section class="info">


<h2>
Lista de Reservas
</h2>



<table>


<thead>

<tr>

<th>
Fecha Solicitud
</th>


<th>
Fecha Reserva
</th>


<th>
Hora Inicio
</th>


<th>
Hora Fin
</th>


<th>
Motivo
</th>


<th>
Vecino
</th>


<th>
Salón
</th>


<th>
Estado
</th>


<th>
Acciones
</th>


</tr>

</thead>




<tbody>



<?php foreach($reservas as $reserva){ ?>


<tr>


<td>

<?php echo $reserva["fecha_solicitud"]; ?>

</td>



<td>

<?php echo $reserva["fecha_reserva"]; ?>

</td>



<td>

<?php echo $reserva["hora_inicio"]; ?>

</td>



<td>

<?php echo $reserva["hora_fin"]; ?>

</td>



<td>

<?php echo $reserva["motivo"]; ?>

</td>



<td>

<?php echo $reserva["vecino"]; ?>

</td>



<td>

<?php echo $reserva["salon"]; ?>

</td>



<td>

<?php echo $reserva["estado"]; ?>

</td>



<td>


<a href="editar.php?id=<?php echo $reserva['id_reserva']; ?>">

✏️ Editar

</a>


<br><br>


<a href="eliminar.php?id=<?php echo $reserva['id_reserva']; ?>"
onclick="return confirm('¿Desea eliminar esta reserva?');">

🗑️ Eliminar

</a>


</td>


</tr>


<?php } ?>


</tbody>


</table>



</section>


</div>




<?php include("../includes/footer.php"); ?>


</body>

</html>