<?php

require_once("../models/Vecino.php");


$modelo = new Vecino();



if(isset($_POST["guardar"])) {



    $datos = [


        "nombre" => $_POST["nombre"],


        "apellido" => $_POST["apellido"],


        "cedula" => $_POST["cedula"],


        "telefono" => $_POST["telefono"],


        "correo" => $_POST["correo"],


        "direccion" => $_POST["direccion"],


        "id_estado" => $_POST["id_estado"]


    ];



    $modelo->agregar($datos);



    header("Location: listar.php");


    exit();

}



?>



<!DOCTYPE html>
<html lang="es">


<head>

<meta charset="UTF-8">


<title>Agregar Vecino | ADNA</title>


<link rel="stylesheet" href="../css/style.css">


</head>



<body>



<?php include("../includes/header.php"); ?>



<div class="dashboard-content">



<h1>
Registrar Vecino
</h1>




<section class="info">



<form method="POST">





<label>
Nombre
</label>

<br>


<input 
type="text"
name="nombre"
placeholder="Nombre del vecino"
required>




<br><br>





<label>
Apellido
</label>

<br>


<input 
type="text"
name="apellido"
placeholder="Apellido del vecino"
required>




<br><br>





<label>
Cédula
</label>

<br>


<input 
type="text"
name="cedula"
placeholder="Número de cédula"
required>




<br><br>





<label>
Teléfono
</label>

<br>


<input 
type="text"
name="telefono"
placeholder="8888-8888">




<br><br>





<label>
Correo electrónico
</label>

<br>


<input 
type="email"
name="correo"
placeholder="correo@gmail.com">




<br><br>





<label>
Dirección
</label>

<br>


<textarea 
name="direccion"
placeholder="Dirección del vecino"></textarea>




<br><br>





<label>
Estado
</label>

<br>



<select name="id_estado">



<option value="1">
Activo
</option>



<option value="2">
Inactivo
</option>



</select>




<br><br>





<button 
type="submit"
name="guardar"
class="btn-more">

Guardar Vecino

</button>



</form>



</section>



</div>




<?php include("../includes/footer.php"); ?>



</body>


</html>