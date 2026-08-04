<?php

require_once("../models/Vecino.php");


$modelo = new Vecino();



if(!isset($_GET["id"])){

    header("Location: listar.php");
    exit();

}



$id = $_GET["id"];



$vecino = $modelo->buscar($id);





if(isset($_POST["actualizar"])) {



    $datos = [


        "nombre" => $_POST["nombre"],


        "apellido" => $_POST["apellido"],


        "cedula" => $_POST["cedula"],


        "telefono" => $_POST["telefono"],


        "correo" => $_POST["correo"],


        "direccion" => $_POST["direccion"],


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


<title>Editar Vecino | ADNA</title>


<link rel="stylesheet" href="../css/style.css">


</head>



<body>



<?php include("../includes/header.php"); ?>



<div class="dashboard-content">



<h1>
Editar Información del Vecino
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
value="<?php echo $vecino['nombre']; ?>"
required>



<br><br>





<label>
Apellido
</label>


<br>


<input 
type="text"
name="apellido"
value="<?php echo $vecino['apellido']; ?>"
required>



<br><br>





<label>
Cédula
</label>


<br>


<input 
type="text"
name="cedula"
value="<?php echo $vecino['cedula']; ?>"
required>



<br><br>





<label>
Teléfono
</label>


<br>


<input 
type="text"
name="telefono"
value="<?php echo $vecino['telefono']; ?>">



<br><br>





<label>
Correo electrónico
</label>


<br>


<input 
type="email"
name="correo"
value="<?php echo $vecino['correo']; ?>">



<br><br>





<label>
Dirección
</label>


<br>


<textarea name="direccion"><?php echo $vecino['direccion']; ?></textarea>



<br><br>





<label>
Estado
</label>


<br>


<select name="id_estado">



<option value="1"
<?php if($vecino["id_estado"]==1) echo "selected"; ?>>

Activo

</option>



<option value="2"
<?php if($vecino["id_estado"]==2) echo "selected"; ?>>

Inactivo

</option>



</select>



<br><br>





<button 
type="submit"
name="actualizar"
class="btn-more">

Actualizar Vecino

</button>



</form>



</section>



</div>




<?php include("../includes/footer.php"); ?>



</body>


</html>