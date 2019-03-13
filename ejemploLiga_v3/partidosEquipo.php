<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $idEquipo=$_GET["equipo"];
  $resultadoLocal = $conexion->query("SELECT * FROM partido WHERE local=".$idEquipo);
  $resultadoVisitante = $conexion->query("SELECT * FROM partido WHERE visitante=".$idEquipo);
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
    <div class="container">
      <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">#</a></li>
          </ul>
        </div>
      </nav>
      <h2>Partidos</h2>
      <table>
        <tr>
          <th>Id</th>
          <th>Resultado</th>
          <th>Fecha</th>
          <th>L/V</th>
        </tr>
        <?php
          foreach ($resultadoLocal as $partido) {
            echo "<tr>";
            echo "<td>".$partido['id_partido']."</td>";
            echo "<td>".$partido['resultado']."</td>";
            echo "<td>".$partido['fecha']."</td>";
            echo "<td>L</td>";
            echo "</tr>";
          }
          foreach ($resultadoVisitante as $partido) {
            echo "<tr>";
            echo "<td>".$partido['id_partido']."</td>";
            echo "<td>".$partido['resultado']."</td>";
            echo "<td>".$partido['fecha']."</td>";
            echo "<td>V</td>";
            echo "</tr>";
          }
        ?>
      </table>

    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  </body>
</html>
