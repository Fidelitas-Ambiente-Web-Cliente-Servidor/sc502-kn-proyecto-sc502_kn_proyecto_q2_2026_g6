<?php

require_once("../controllers/ReservaController.php");

$controlador = new ReservaController();



if(isset($_POST["guardar"])) {


    $datos = [

        "fecha_solicitud" => $_POST["fecha_solicitud"],

        "fecha_reserva" => $_POST["fecha_reserva"],

        "hora_inicio" => $_POST["hora_inicio"],

        "hora_fin" => $_POST["hora_fin"],

        "motivo" => $_POST["motivo"],

        "id_vecino" => $_POST["id_vecino"],

        "id_salon" => $_POST["id_salon"],

        "id_estado" => 3

    ];



    $controlador->guardar($datos);



    header("Location: listar.php");

    exit();

}


?>



<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Agregar Reserva | ADNA</title>


<link rel="stylesheet" href="../css/style.css">


</head>



<body>


<?php include("../includes/header.php"); ?>



<div class="dashboard-content">



<h1>
Nueva Reserva
</h1>



<section class="info">



<form method="POST">



<label>
Fecha de solicitud
</label>

<br>


<input 
type="date"
name="fecha_solicitud"
required>


<br><br>



<label>
Fecha de reserva
</label>

<br>


<input 
type="date"
name="fecha_reserva"
required>


<br><br>



<label>
Hora inicio
</label>

<br>


<input 
type="time"
name="hora_inicio"
required>


<br><br>



<label>
Hora finalización
</label>

<br>


<input 
type="time"
name="hora_fin"
required>


<br><br>



<label>
Motivo de la reserva
</label>

<br>


<textarea 
name="motivo"
required></textarea>


<br><br>



<label>
ID Vecino
</label>

<br>


<input 
type="number"
name="id_vecino"
required>


<br><br>



<label>
ID Salón
</label>

<br>


<input 
type="number"
name="id_salon"
required>


<br><br>



<button 
type="submit"
name="guardar"
class="btn-more">

Guardar Reserva

</button>



</form>



</section>



</div>



<?php include("../includes/footer.php"); ?>



</body>

</html>