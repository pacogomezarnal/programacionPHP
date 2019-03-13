<?php
/**
 * Jugador
 */
class Jugador
{

  function __construct()
  {
    echo "Nuevo Jugador";
  }

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
    }
    return $error;
  }
}



 ?>
