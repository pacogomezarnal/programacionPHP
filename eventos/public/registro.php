<?php
require "../src/Conexion.php";
require "../src/Asistente.php";

$a=new Asistente();
var_dump($_POST);
$error=$a->comprobarCampos($_POST);
if($error){
  echo $error;
}else{
  $a->conectar();
  $a->insertarUsuario();
  $idAsistente=$a->ultimoRegistro()
  $a->insertarEventoAsist($idAsistente,$_POST["evento"]);
}


?>
<html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
