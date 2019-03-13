<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $id=$_GET["idEquipo"];
  $resultado = $conexion->query("SELECT * FROM jugador WHERE equipo=".$id);
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
      <h2>Jugador</h2>
      <table>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Posicion</th>
        </tr>
        <?php

          foreach ($resultado as $jugador) {
            echo "<tr>";
            echo "<td>".$jugador['id_jugador']."</td>";
            echo "<td>".$jugador['nombre']."</td>";
            echo "<td>".$jugador['apellido']."</td>";
            if($jugador['posicion']=="Base"){
              echo "<td><strong>".$jugador['posicion']."</strong></td>";
            }else{
              echo "<td>".$jugador['posicion']."</td>";
            }
            echo "</tr>";
          }
        ?>
      </table>

    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
