<?php

class Evento extends Conexion
{

  private $descripcion;

  function __construct()
  {

  }

   public function listarEventos()
   {
      $consulta="SELECT * FROM evento";
      $resultado=$this->conexion->query($consulta);
      return $resultado;
    }
}

 ?>
