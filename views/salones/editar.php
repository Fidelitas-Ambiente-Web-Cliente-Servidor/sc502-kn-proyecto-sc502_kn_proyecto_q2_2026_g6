<?php

require_once("../models/Salon.php");


$modelo = new Salon();



if(!isset($_GET["id"])){

    header("Location: listar.php");
    exit();

}



$id = $_GET["id"];



$salon = $modelo->buscar($id);




if(isset($_POST["actualizar"])) {



    $datos = [


        "nombre" => $_POST["nombre"],


        "descripcion" => $_POST["descripcion"],


        "capacidad" => $_POST["capacidad"],


        "ubicacion" => $_POST["ubicacion"],


        "id_estado" => $_POST["id_estado"]


    ];



    $modelo->actualizar($id,$datos);



    header("Location: listar.php");

    exit();

}



?>



<!DOCTYPE html>
<html lang="es">


<head>

<meta charset="UTF-8">


<title>Editar Salón | ADNA</title>


<link rel="stylesheet" href="../css/style.css">


</head>



<body>



<?php include("../includes/header.php"); ?>



<div class="dashboard-content">



<h1>
Editar Salón Comunal
</h1>




<section class="info">



<form method="POST">





<label>
Nombre del salón
</label>


<br>


<input 
type="text"
name="nombre"
value="<?php echo $salon['nombre']; ?>"
required>



<br><br>





<label>
Descripción
</label>


<br>


<textarea 
name="descripcion"
required><?php echo $salon['descripcion']; ?></textarea>



<br><br>





<label>
Capacidad
</label>


<br>


<input 
type="number"
name="capacidad"
value="<?php echo $salon['capacidad']; ?>"
required>



<br><br>





<label>
Ubicación
</label>


<br>


<input 
type="text"
name="ubicacion"
value="<?php echo $salon['ubicacion']; ?>"
required>



<br><br>





<label>
Estado
</label>


<br>


<select name="id_estado">


<option value="1"
<?php if($salon["id_estado"]==1) echo "selected"; ?>>

Activo

</option>



<option value="2"
<?php if($salon["id_estado"]==2) echo "selected"; ?>>

Inactivo

</option>



</select>



<br><br>




<button 
type="submit"
name="actualizar"
class="btn-more">

Actualizar Salón

</button>




</form>



</section>



</div>




<?php include("../includes/footer.php"); ?>



</body>


</html>