<?php

require_once("../models/Vecino.php");


$modelo = new Vecino();



$vecinos = $modelo->listar();



?>


<!DOCTYPE html>
<html lang="es">


<head>

<meta charset="UTF-8">


<title>Vecinos | ADNA</title>


<link rel="stylesheet" href="../css/style.css">


</head>



<body>



<?php include("../includes/header.php"); ?>



<div class="dashboard-content">



<h1>
Administración de Vecinos
</h1>



<a href="agregar.php" class="btn-more">

➕ Nuevo Vecino

</a>



<br><br>




<section class="info">



<h2>
Lista de Vecinos Registrados
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


<th>
Acciones
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



<td>



<a href="editar.php?id=<?php echo $vecino['id_vecino']; ?>">

✏️ Editar

</a>



<br><br>



<a 
href="eliminar.php?id=<?php echo $vecino['id_vecino']; ?>"
onclick="return confirm('¿Desea eliminar este vecino?');">

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