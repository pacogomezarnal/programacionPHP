<?php
if(isset($_POST["nombre"])){
  $conexion = new mysqli("localhost", "root", "", "nba");
  if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else{
    $nombre=$_POST["nombre"];
    $ciudad=$_POST["ciudad"];
    $conferencia=$_POST["conferencia"];
    $division=$_POST["division"];
    $consulta="INSERT INTO equipos (Nombre, Ciudad, Conferencia, Division)
               VALUES ( '$nombre','$ciudad', '$conferencia', '$division')";
    $resultado = $conexion->query($consulta);
    if($resultado==false){
      echo $conexion->error;
    }else{
      echo "Insercion Correcta";
    }
    $resultado=$conexion->query("SELECT * FROM equipos WHERE Nombre='$nombre'");
  }
 }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="POST">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" value="">
      <br><br>
      <label for="ciudad">Ciudad</label>
      <input type="text" name="ciudad" id="ciudad" value="">
      <br><br>
      <label for="conferencia">Conferencia</label>
      <input type="text" name="conferencia" id="conferencia" value="">
      <br><br>
      <label for="division">Division</label>
      <input type="text" name="division" id="division" value="">
      <br><br>
      <input type="submit" value="ENVIAR">
    </form>
  </body>
</html>
