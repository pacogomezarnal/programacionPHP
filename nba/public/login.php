<?php
require "./../src/DB.php";
require "./../src/Equipo.php";

$e=new Equipo();
$e->conectar();
$equipos=$e->listarEquipos();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <select class="" name="equipo">
        <?php
        foreach ($equipos as $equipo ) {
          $equipoTemp=$equipo["Nombre"];
          echo "<option value='$equipoTemp'>$equipoTemp</option>";
        }
        ?>
      </select>
      <input type="submit" name="" value="ENTRAR">
    </form>
  </body>
</html>
