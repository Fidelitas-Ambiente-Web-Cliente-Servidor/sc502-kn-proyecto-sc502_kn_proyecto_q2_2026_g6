<?php

require_once("models/ContactoModel.php");


class ContactoController
{

    private $modelo;


    public function __construct()
    {
        $this->modelo = new ContactoModel();
    }



    // Mostrar todos los contactos

    public function listar()
    {
        return $this->modelo->obtenerContactos();
    }



    // Guardar un nuevo contacto

    public function guardar($datos)
    {
        return $this->modelo->insertarContacto($datos);
    }



    // Obtener un contacto por ID

    public function ver($id)
    {
        return $this->modelo->obtenerContacto($id);
    }



    // Cambiar estado del contacto

    public function cambiarEstado($id,$estado)
    {
        return $this->modelo->actualizarEstado($id,$estado);
    }



    // Eliminar contacto

    public function eliminar($id)
    {
        return $this->modelo->eliminarContacto($id);
    }


}

?>