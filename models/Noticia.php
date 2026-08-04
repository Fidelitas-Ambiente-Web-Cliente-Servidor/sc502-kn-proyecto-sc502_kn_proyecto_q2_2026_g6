<?php

require_once("controllers/NoticiaController.php");


$controlador = new NoticiaController();

$noticias = $controlador->listar();


?>


<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Noticias ADNA</title>


<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>


<body>


<?php include("includes/header.php"); ?>



<section class="hero">


<div class="hero-overlay">


<div class="hero-text">


<h1>
Noticias ADNA
</h1>


<p>
Manténgase informado sobre proyectos, comunicados y actividades de la comunidad.
</p>


</div>


</div>


</section>




<section class="info">


<h2>
Últimas Noticias
</h2>



<div class="cards">



<?php foreach($noticias as $noticia){ ?>



<div class="card">



<?php if(!empty($noticia["imagen"])){ ?>


<img 
src="img/noticias/<?php echo $noticia["imagen"]; ?>"
alt="Imagen noticia"
width="250">


<?php } ?>



<h3>

<?php echo $noticia["titulo"]; ?>

</h3>



<p>

<?php echo $noticia["descripcion"]; ?>

</p>



<small>

Fecha:
<?php echo $noticia["fecha_publicacion"]; ?>

</small>



</div>



<?php } ?>



</div>



</section>




<?php include("includes/footer.php"); ?>


</body>


</html>