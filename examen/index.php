<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{

  $partidos = $conexion->query("SELECT * FROM partido");
}

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    <h2>Partidos</h2>
    <table>
      <tr>
        <th>Id</th>
        <th>Equipo Local</th>
        <th>Equipo Visitante</th>
        <th>Resultado</th>
      </tr>
  <?php
    foreach ($partidos as $partido) {
      echo "<tr>";
      echo "<td>".$partido['id_partido']."</td>";
      echo "<td><a href='equipo.php?idEquipo=".$partido['local']."'>".$partido['local']."</a></td>";
      echo "<td><a href='equipo.php?idEquipo=".$partido['visitante']."'>".$partido['visitante']."</a></td>";
      echo "<td>".$partido['resultado']."</td>";
      echo "</tr>";
    }
  ?>
  </body>
</html>
