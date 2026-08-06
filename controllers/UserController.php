<?php

// Intentar cargar el modelo considerando minúsculas y mayúsculas en la carpeta
if (file_exists(__DIR__ . "/../models/User.php")) {
    require_once(__DIR__ . "/../models/User.php");
} elseif (file_exists(__DIR__ . "/../Models/User.php")) {
    require_once(__DIR__ . "/../Models/User.php");
}

class UserController
{
    private $modelo;

    public function __construct()
    {
        // Verificar si la clase existe antes de instanciarla
        if (!class_exists('User')) {
            die("Error: La clase 'User' no fue encontrada. Revisa que el archivo models/User.php declare exactamente 'class User'.");
        }

        $this->modelo = new User();
    }

    public function login($correo, $contrasena)
    {
        return $this->modelo->login($correo, $contrasena);
    }
}
?>