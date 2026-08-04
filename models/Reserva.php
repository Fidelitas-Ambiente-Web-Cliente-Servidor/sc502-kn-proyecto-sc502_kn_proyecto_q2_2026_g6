<?php

require_once("controllers/ReservaController.php");


$controlador = new ReservaController();

$reservas = $controlador->listar();


?>


<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Reservas ADNA</title>


<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>


<body>


<?php include("includes/header.php"); ?>



<section class="hero">


<div class="hero-overlay">


<div class="hero-text">


<h1>
Reservas del Salón Comunal
</h1>


<p>

Administre las solicitudes de uso de los espacios comunitarios de ADNA.

</p>


</div>


</div>


</section>





<section class="info">


<h2>
Listado de Reservas
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



</tr>


<?php } ?>



</tbody>


</table>




</section>





<?php include("includes/footer.php"); ?>


</body>


</html>