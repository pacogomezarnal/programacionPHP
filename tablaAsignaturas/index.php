<?php
//Variables de asignaturas y calificaciones
$asignatura1="Cocina";
$asignatura2="Fisica nuclear";
$asignatura3="Mature Sex";
$nota1=4;
$nota2=5.5;
$nota3=10;
$nombre="Paco Gomez Arnal";

$rojo='bgcolor="#FF0000"';
$amarillo='bgcolor="#FFFF00"';
$verde='bgcolor="#00FF00"';

if($nota1>6){
  $color1=$verde;
}elseif ($nota1>=5&&$nota1<=6){
  $color1=$amarillo;
}elseif($nota1<5){
  $color1=$rojo;
}

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border=1>
      <tr>
        <td colspan="2"><?=$nombre?></td>
      </tr>
      <tr>
        <td>Asignatura</td>
        <td>Calificacion</td>
      </tr>
      <tr>
        <td><?=$asignatura1?></td>
        <td <?=$color1?>><?=$nota1?></td>
      </tr>
      <tr>
        <td><?=$asignatura2?></td>
        <td bgcolor="#FFFF00"><?=$nota2?></td>
      </tr>
      <tr>
        <td><?=$asignatura3?></td>
        <td bgcolor="#00FF00"><?=$nota3?></td>
      </tr>
    </table>
  </body>
</html>
