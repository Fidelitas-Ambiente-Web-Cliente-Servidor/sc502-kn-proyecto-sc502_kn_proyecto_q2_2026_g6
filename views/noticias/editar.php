<?php

require_once("controllers/ActividadController.php");


$controlador = new ActividadController();



if(!isset($_GET["id"])){

    header("Location: listar.php");
    exit();

}



$id = $_GET["id"];



$actividad = $controlador->ver($id);



if(isset($_POST["actualizar"])) {



    $datos = [


        "nombre" => $_POST["nombre"],

        "descripcion" => $_POST["descripcion"],

        "fecha" => $_POST["fecha"],

        "hora" => $_POST["hora"],

        "lugar" => $_POST["lugar"]

    ];



    $controlador->actualizar($id,$datos);



    header("Location: listar.php");

    exit();

}


?>


<!DOCTYPE html>
<html lang="es">


<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Editar Actividad | ADNA</title>


<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>



<body>


<?php include("includes/header.php"); ?>



<div class="dashboard-content">


<h1>
Editar Actividad
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
value="<?php echo $actividad['nombre']; ?>"
required>



<br><br>



<label>
Descripción
</label>


<br>


<textarea 
name="descripcion"
required><?php echo $actividad['descripcion']; ?></textarea>



<br><br>



<label>
Fecha
</label>


<br>


<input 
type="date"
name="fecha"
value="<?php echo $actividad['fecha']; ?>"
required>



<br><br>



<label>
Hora
</label>


<br>


<input 
type="time"
name="hora"
value="<?php echo $actividad['hora']; ?>"
required>



<br><br>



<label>
Lugar
</label>


<br>


<input 
type="text"
name="lugar"
value="<?php echo $actividad['lugar']; ?>"
required>



<br><br>



<button 
type="submit"
name="actualizar"
class="btn-more">

Actualizar Actividad

</button>



</form>



</section>


</div>



<?php include("includes/footer.php"); ?>


</body>


</html>