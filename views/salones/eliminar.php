<?php

require_once("../models/Salon.php");


$modelo = new Salon();



if(isset($_GET["id"])) {


    $id = $_GET["id"];



    $modelo->eliminar($id);


}



header("Location: listar.php");


exit();


?>