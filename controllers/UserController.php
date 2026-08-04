<?php


require_once(__DIR__ . "/../models/User.php");



class UserController
{


    private $modelo;



    public function __construct()
    {


        $this->modelo = new User();


    }




    public function login($correo,$contrasena)
    {


        return $this->modelo->login($correo,$contrasena);


    }



}

?>