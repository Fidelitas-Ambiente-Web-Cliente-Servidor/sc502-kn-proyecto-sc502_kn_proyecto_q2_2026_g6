<?php

require_once("controllers/VecinoController.php");


$controlador = new VecinoController();

$vecinos = $controlador->listar();


?>


<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Vecinos ADNA</title>


<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>


<body>


<?php include("includes/header.php"); ?>



<section class="hero">


<div class="hero-overlay">


<div class="hero-text">


<h1>
Registro de Vecinos
</h1>


<p>

Información de los miembros de la comunidad asociados a ADNA.

</p>


</div>


</div>


</section>





<section class="info">


<h2>
Vecinos Registrados
</h2>




<table>


<thead>


<tr>

<th>
Nombre
</th>


<th>
Apellido
</th>


<th>
Cédula
</th>


<th>
Teléfono
</th>


<th>
Correo
</th>


<th>
Dirección
</th>


<th>
Estado
</th>


</tr>


</thead>




<tbody>



<?php foreach($vecinos as $vecino){ ?>


<tr>


<td>

<?php echo $vecino["nombre"]; ?>

</td>



<td>

<?php echo $vecino["apellido"]; ?>

</td>



<td>

<?php echo $vecino["cedula"]; ?>

</td>



<td>

<?php echo $vecino["telefono"]; ?>

</td>



<td>

<?php echo $vecino["correo"]; ?>

</td>



<td>

<?php echo $vecino["direccion"]; ?>

</td>



<td>

<?php echo $vecino["estado"]; ?>

</td>



</tr>


<?php } ?>



</tbody>


</table>




</section>





<?php include("includes/footer.php"); ?>


</body>


</html>