<?php

require_once("controllers/ActividadController.php");


$controlador = new ActividadController();



if(isset($_POST["guardar"])) {


    $datos = [

        "nombre" => $_POST["nombre"],

        "descripcion" => $_POST["descripcion"],

        "fecha" => $_POST["fecha"],

        "hora" => $_POST["hora"],

        "lugar" => $_POST["lugar"],

        "id_estado" => 1

    ];



    $resultado = $controlador->guardar($datos);



    if($resultado){

        header("Location: Actividad.php");
        exit();

    }


}


?>



<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Agregar Actividad ADNA</title>


<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>


<body>


<?php include("includes/header.php"); ?>



<section class="info">


<h2>
Registrar Nueva Actividad
</h2>



<form method="POST">



<label>
Nombre de la actividad
</label>

<br>

<input 
type="text"
name="nombre"
required>


<br><br>



<label>
Descripción
</label>

<br>


<textarea 
name="descripcion"
required></textarea>


<br><br>



<label>
Fecha
</label>

<br>


<input 
type="date"
name="fecha"
required>


<br><br>



<label>
Hora
</label>

<br>


<input 
type="time"
name="hora"
required>


<br><br>



<label>
Lugar
</label>

<br>


<input 
type="text"
name="lugar"
required>


<br><br>



<button 
type="submit"
name="guardar"
class="btn-more">

Guardar Actividad

</button>



</form>


</section>



<?php include("includes/footer.php"); ?>


</body>

</html>