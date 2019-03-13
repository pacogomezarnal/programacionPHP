<?php
/**
 * Jugador
 */
class Jugador
{

  function __construct()
  {
  }

  /*
  * Param entrada: array $_POST
  * Param salida: string con el $error
  *               - ""-> sin error
                  - "MSG"-> error encontrado
  */
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["codigo"])||!isset($post["Nombre"])||!isset($post["Peso"])){
      $error="";
    }elseif($post["codigo"]==""){
      $error="No has introducido el codigo";
    }elseif($post["Nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["Peso"]==""){
      $error="No has introducido el Peso";
    }else{
      $error=false;
    }
    return $error;
  }

  public function conectar(){
    $conexion = new mysqli("localhost", "root", "", "nba");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }
  }

  public function insertarJugador(){

    $consulta=INSERT INTO `jugadores` (`codigo`, `Nombre`, `Procedencia`, `Altura`, `Peso`, `Posicion`, `Nombre_equipo`) VALUES ('614', 'Paco', NULL, NULL, '85', NULL, NULL);
  }
}



 ?>
