<?php

require_once("controllers/SalonController.php");


$controlador = new SalonController();

$salones = $controlador->listar();


?>


<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Salones ADNA</title>


<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>


<body>


<?php include("includes/header.php"); ?>



<section class="hero">


<div class="hero-overlay">


<div class="hero-text">


<h1>
Espacios Comunales ADNA
</h1>


<p>

Conozca los salones disponibles para actividades,
reuniones y eventos comunitarios.

</p>


</div>


</div>


</section>





<section class="info">


<h2>
Salones Disponibles
</h2>




<div class="cards">



<?php foreach($salones as $salon){ ?>



<div class="card">



<h3>

<?php echo $salon["nombre"]; ?>

</h3>



<p>

<?php echo $salon["descripcion"]; ?>

</p>



<p>

<strong>
Capacidad:
</strong>

<?php echo $salon["capacidad"]; ?>

personas

</p>



<p>

<strong>
Ubicación:
</strong>

<?php echo $salon["ubicacion"]; ?>

</p>



</div>



<?php } ?>



</div>




</section>





<?php include("includes/footer.php"); ?>


</body>


</html>