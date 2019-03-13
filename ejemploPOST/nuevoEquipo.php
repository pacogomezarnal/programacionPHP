<?php
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
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Equipo</h2>
    <table>
      <tr>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Conferencia</th>
        <th>Division</th>
      </tr>
      <?php
        foreach ($resultado as $equipo) {
          echo "<tr>";
          echo "<td>".$equipo['Nombre']."</td>";
          echo "<td>".$equipo['Ciudad']."</td>";
          echo "<td>".$equipo['Conferencia']."</td>";
          echo "<td>".$equipo['Division']."</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
