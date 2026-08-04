<?php

require_once("models/ReservaModel.php");


class ReservaController
{

    private $modelo;


    public function __construct()
    {
        $this->modelo = new ReservaModel();
    }



    // Mostrar todas las reservas

    public function listar()
    {
        return $this->modelo->obtenerReservas();
    }



    // Guardar una reserva nueva

    public function guardar($datos)
    {
        return $this->modelo->insertarReserva($datos);
    }



    // Obtener una reserva por ID

    public function ver($id)
    {
        return $this->modelo->obtenerReserva($id);
    }



    // Actualizar reserva

    public function actualizar($id, $datos)
    {
        return $this->modelo->actualizarReserva($id, $datos);
    }



    // Cambiar estado de la reserva

    public function cambiarEstado($id, $estado)
    {
        return $this->modelo->actualizarEstado($id, $estado);
    }



    // Eliminar reserva

    public function eliminar($id)
    {
        return $this->modelo->eliminarReserva($id);
    }



    // Mostrar reservas pendientes

    public function pendientes()
    {
        return $this->modelo->obtenerReservasPendientes();
    }



    // Mostrar reservas aprobadas

    public function aprobadas()
    {
        return $this->modelo->obtenerReservasAprobadas();
    }


}

?>