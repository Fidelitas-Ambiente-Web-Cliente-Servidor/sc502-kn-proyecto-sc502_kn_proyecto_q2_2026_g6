<?php

require_once("../controllers/ReservaController.php");


$controlador = new ReservaController();



if(isset($_GET["id"])) {


    $id = $_GET["id"];


    $controlador->eliminar($id);


}



header("Location: listar.php");

exit();


?>