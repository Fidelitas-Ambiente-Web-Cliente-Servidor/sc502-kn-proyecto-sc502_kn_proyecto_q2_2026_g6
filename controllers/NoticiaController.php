<?php

require_once("models/NoticiaModel.php");


class NoticiaController
{

    private $modelo;


    public function __construct()
    {
        $this->modelo = new NoticiaModel();
    }



    // Mostrar todas las noticias

    public function listar()
    {
        return $this->modelo->obtenerNoticias();
    }



    // Guardar una noticia

    public function guardar($datos)
    {
        return $this->modelo->insertarNoticia($datos);
    }



    // Obtener una noticia por ID

    public function ver($id)
    {
        return $this->modelo->obtenerNoticia($id);
    }



    // Actualizar noticia

    public function actualizar($id, $datos)
    {
        return $this->modelo->actualizarNoticia($id, $datos);
    }



    // Eliminar noticia

    public function eliminar($id)
    {
        return $this->modelo->eliminarNoticia($id);
    }



    // Mostrar noticias activas

    public function noticiasActivas()
    {
        return $this->modelo->obtenerNoticiasActivas();
    }


}

?>