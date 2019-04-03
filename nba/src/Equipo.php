<?php
/**
 * Equipo
 */
class Equipo extends DB
{

  function __construct()
  {
    parent::config("localhost","nba","root","");
  }

  public function listarEquipos(){
    $consulta="SELECT * FROM equipos";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }
}
