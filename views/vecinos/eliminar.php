<?php

require_once("../models/Vecino.php");


$modelo = new Vecino();



if(isset($_GET["id"])) {


    $id = $_GET["id"];



    $modelo->eliminar($id);


}



header("Location: listar.php");


exit();


?>