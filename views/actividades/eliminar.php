<?php

require_once("controllers/ActividadController.php");


$controlador = new ActividadController();



if(isset($_GET["id"])) {


    $id = $_GET["id"];


    $controlador->eliminar($id);



}



header("Location: Actividad.php");

exit();


?>