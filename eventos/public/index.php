<?php
require "../src/Conexion.php";
require "../src/Evento.php";

$e=new Evento();
$e->conectar();
$resultado=$e->listarEventos();

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>REGISTRO DE ASISTENTE</h2>
    <form  action="registro.php" method="post">
      Nombre<br>
      <input type="text" name="nombre" id="nombre" value="">
      <br>Apellidos<br>
      <input type="text" name="apellidos" id="apellidos" value="">
      <br>Edad<br>
      <input type="text" name="edad" id="edad" value="">
      <br>Provincia<br>
      <input type="text" name="provincia" id="provincia" value="">
      <br>Evento<br>
      <select class="" name="evento" id="evento">
        <?php
          foreach ($resultado as $evento) {
            $id=$evento["id"];
            $descripcion=$evento["descripcion"];
            echo "<option value='$id'>$descripcion</option>";
          }
        ?>
      </select>
      <br><br>
      <input type="submit" name="" value="REGISTRAR" onclick="return comp();">
    </form>
  </body>
  <script type="text/javascript" src="./js/comprobar.js"></script>
</html>
