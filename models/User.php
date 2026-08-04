<?php

require_once(__DIR__ . "/../config/database.php");


class User{


    private $conexion;



    public function __construct(){


        $database = new Database();


        $this->conexion = $database->conectar();


    }



    public function login($correo,$contrasena){


        $sql = "SELECT *
                FROM usuario
                WHERE correo = ?
                AND contrasena = ?
                AND id_estado = 1";



        $consulta = $this->conexion->prepare($sql);



        $consulta->execute([

            $correo,

            $contrasena

        ]);



        return $consulta->fetch(PDO::FETCH_ASSOC);



    }



}

?>