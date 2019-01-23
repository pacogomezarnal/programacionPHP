<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Ejemplo con estructura de repeticion con for</h2>
    <?php
      for ($i=0; $i < 10; $i=$i+2) {
        echo "$i <br>";
      }
    ?>
    <h2>Ejemplo con estructura de repeticion con while</h2>
    <?php
      $mostrar=true;
      $valor=0;
      $contador=1;
      while ($mostrar) {
        echo "$valor <br>";
        $contador++;
        $valor=$valor+2;
        if($contador==10){
          echo "$valor <br>";
          $mostrar=false;
        }
      }
    ?>
  </body>
</html>
