<?php

require_once("models/SalonModel.php");


class SalonController
{

    private $modelo;


    public function __construct()
    {
        $this->modelo = new SalonModel();
    }



    // Mostrar todos los salones

    public function listar()
    {
        return $this->modelo->obtenerSalones();
    }



    // Mostrar salones disponibles

    public function disponibles()
    {
        return $this->modelo->obtenerSalonesActivos();
    }



    // Guardar un nuevo salón

    public function guardar($datos)
    {
        return $this->modelo->insertarSalon($datos);
    }



    // Obtener salón por ID

    public function ver($id)
    {
        return $this->modelo->obtenerSalon($id);
    }



    // Actualizar información del salón

    public function actualizar($id, $datos)
    {
        return $this->modelo->actualizarSalon($id, $datos);
    }



    // Cambiar estado del salón

    public function cambiarEstado($id, $estado)
    {
        return $this->modelo->actualizarEstado($id, $estado);
    }



    // Eliminar salón

    public function eliminar($id)
    {
        return $this->modelo->eliminarSalon($id);
    }


}

?>