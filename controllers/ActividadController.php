<?php

require_once("models/ActividadModel.php");


class ActividadController
{

    private $modelo;


    public function __construct()
    {

        $this->modelo = new ActividadModel();

    }



    // Mostrar actividades

    public function listar()
    {

        return $this->modelo->obtenerActividades();

    }



    // Guardar actividad

    public function guardar($datos)
    {

        return $this->modelo->insertarActividad($datos);

    }



    // Buscar una actividad

    public function editar($id)
    {

        return $this->modelo->obtenerActividad($id);

    }



    // Actualizar actividad

    public function actualizar($id,$datos)
    {

        return $this->modelo->actualizarActividad($id,$datos);

    }



    // Eliminar actividad

    public function eliminar($id)
    {

        return $this->modelo->eliminarActividad($id);

    }


}


?>