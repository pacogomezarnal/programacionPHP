<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT id_jugador,nombre,apellido,salario FROM jugador ORDER BY salario DESC");
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Listar jugadores</a></li>
            <li><a href="">Top Altura</a></li>
          </ul>
        </div>
      </nav>
      <h2>Jugadores</h2>
      <table>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Salario</th>
        </tr>
        <?php
          foreach ($resultado as $jugador) {
            echo "<tr>";
            echo "<td>".$jugador['id_jugador']."</td>";
            echo "<td>".$jugador['nombre']." ".$jugador['apellido']."</td>";
            echo "<td>".$jugador['salario']."</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
