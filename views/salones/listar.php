<?php

require_once("../models/Salon.php");


$modelo = new Salon();



$salones = $modelo->listar();



?>


<!DOCTYPE html>
<html lang="es">


<head>

<meta charset="UTF-8">


<title>Salones | ADNA</title>


<link rel="stylesheet" href="../css/style.css">


</head>



<body>



<?php include("../includes/header.php"); ?>



<div class="dashboard-content">



<h1>
Administración de Salones Comunales
</h1>



<a href="agregar.php" class="btn-more">

➕ Nuevo Salón

</a>



<br><br>




<section class="info">



<h2>
Lista de Salones
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
Capacidad
</th>


<th>
Ubicación
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



<?php foreach($salones as $salon){ ?>


<tr>



<td>

<?php echo $salon["nombre"]; ?>

</td>



<td>

<?php echo $salon["descripcion"]; ?>

</td>



<td>

<?php echo $salon["capacidad"]; ?>

</td>



<td>

<?php echo $salon["ubicacion"]; ?>

</td>



<td>

<?php echo $salon["estado"]; ?>

</td>



<td>



<a href="editar.php?id=<?php echo $salon['id_salon']; ?>">

✏️ Editar

</a>



<br><br>



<a 
href="eliminar.php?id=<?php echo $salon['id_salon']; ?>"
onclick="return confirm('¿Desea eliminar este salón?');">

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