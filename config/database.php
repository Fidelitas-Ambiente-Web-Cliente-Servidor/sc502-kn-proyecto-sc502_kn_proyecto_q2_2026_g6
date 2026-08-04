<?php


class Database{


    private $host = "db";
    private $usuario = "appuser";
    private $password = "apppass";
    private $baseDatos = "appdb";


    public function getConnection(){


        try{


            $conexion = new PDO(

                "mysql:host=".$this->host.";dbname=".$this->baseDatos.";charset=utf8",

                $this->usuario,

                $this->password

            );



            $conexion->setAttribute(

                PDO::ATTR_ERRMODE,

                PDO::ERRMODE_EXCEPTION

            );



            return $conexion;



        }catch(PDOException $e){


            die("Error de conexión: ".$e->getMessage());


        }


    }


}

?>