<?php

require_once __DIR__ . '/../config/Database.php';

class User
{
    private $conn;
    private $table_name = "usuario";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function login($correo, $contrasena)
    {
        $query = "SELECT * FROM {$this->table_name}
                  WHERE correo = :correo
                  LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":correo", $correo);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Contraseña en texto plano o hash
            if (
                $usuario["contrasena"] === $contrasena ||
                password_verify($contrasena, $usuario["contrasena"])
            ) {
                return $usuario;
            }
        }

        return false;
    }
}
?>