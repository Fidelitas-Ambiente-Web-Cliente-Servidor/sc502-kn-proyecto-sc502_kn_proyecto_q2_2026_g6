<?php

require_once("controllers/ActividadController.php");


$controlador = new ActividadController();



if(isset($_GET["id"])) {


    $id = $_GET["id"];


    $resultado = $controlador->eliminar($id);


}



header("Location: listar.php");

exit();


?>