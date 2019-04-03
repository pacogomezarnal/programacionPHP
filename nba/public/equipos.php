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
    <link rel="stylesheet" href="./css/nba.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <!-- Menu navegacion-->
    <?php include "./assets/navSup.php"; ?>
    <?php
      foreach ($equipos as $equipo) {
        echo "- ".$equipo["Nombre"]."<br>";
      }
     ?>
  </body>
</html>
