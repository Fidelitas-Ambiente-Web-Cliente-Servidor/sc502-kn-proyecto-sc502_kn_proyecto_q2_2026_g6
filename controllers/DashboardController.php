<?php

require_once("models/DashboardModel.php");


class DashboardController
{

    private $modelo;


    public function __construct()
    {
        $this->modelo = new DashboardModel();
    }



    // Obtener resumen general del sistema

    public function obtenerResumen()
    {

        return [

            "usuarios" => $this->modelo->totalUsuarios(),

            "actividades" => $this->modelo->totalActividades(),

            "contactos" => $this->modelo->totalContactos(),

            "vecinos" => $this->modelo->totalVecinos(),

            "reservas" => $this->modelo->totalReservas()

        ];

    }



    // Obtener actividades recientes

    public function actividadesRecientes()
    {

        return $this->modelo->ultimasActividades();

    }



    // Obtener reservas pendientes

    public function reservasPendientes()
    {

        return $this->modelo->reservasPendientes();

    }


}

?>