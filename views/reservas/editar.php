<?php

require_once("../controllers/ReservaController.php");


$controlador = new ReservaController();



if(!isset($_GET["id"])){

    header("Location: listar.php");
    exit();

}



$id = $_GET["id"];



$reserva = $controlador->ver($id);



if(isset($_POST["actualizar"])) {



    $datos = [

        "fecha_solicitud" => $_POST["fecha_solicitud"],

        "fecha_reserva" => $_POST["fecha_reserva"],

        "hora_inicio" => $_POST["hora_inicio"],

        "hora_fin" => $_POST["hora_fin"],

        "motivo" => $_POST["motivo"],

        "id_vecino" => $_POST["id_vecino"],

        "id_salon" => $_POST["id_salon"],

        "id_estado" => $_POST["id_estado"]

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


<title>Editar Reserva | ADNA</title>


<link rel="stylesheet" href="../css/style.css">


</head>



<body>


<?php include("../includes/header.php"); ?>



<div class="dashboard-content">


<h1>
Editar Reserva
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
value="<?php echo $reserva['fecha_solicitud']; ?>"
required>



<br><br>



<label>
Fecha de reserva
</label>

<br>


<input 
type="date"
name="fecha_reserva"
value="<?php echo $reserva['fecha_reserva']; ?>"
required>



<br><br>



<label>
Hora inicio
</label>

<br>


<input 
type="time"
name="hora_inicio"
value="<?php echo $reserva['hora_inicio']; ?>"
required>



<br><br>



<label>
Hora fin
</label>

<br>


<input 
type="time"
name="hora_fin"
value="<?php echo $reserva['hora_fin']; ?>"
required>



<br><br>



<label>
Motivo
</label>

<br>


<textarea 
name="motivo"
required><?php echo $reserva['motivo']; ?></textarea>



<br><br>



<label>
ID Vecino
</label>

<br>


<input 
type="number"
name="id_vecino"
value="<?php echo $reserva['id_vecino']; ?>"
required>



<br><br>



<label>
ID Salón
</label>

<br>


<input 
type="number"
name="id_salon"
value="<?php echo $reserva['id_salon']; ?>"
required>



<br><br>



<label>
Estado
</label>

<br>


<select name="id_estado">


<option value="3"
<?php if($reserva['id_estado']==3) echo "selected"; ?>>
Pendiente
</option>


<option value="4"
<?php if($reserva['id_estado']==4) echo "selected"; ?>>
Aprobada
</option>


<option value="5"
<?php if($reserva['id_estado']==5) echo "selected"; ?>>
Rechazada
</option>


</select>



<br><br>




<button 
type="submit"
name="actualizar"
class="btn-more">

Actualizar Reserva

</button>



</form>



</section>



</div>



<?php include("../includes/footer.php"); ?>


</body>

</html>