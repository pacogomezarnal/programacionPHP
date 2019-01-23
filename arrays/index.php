<?php
  $colores=[
    "Rojo"=>"#ff0000",
    "Verde"=>"#00ff00",
    "Azul"=>"#0000ff"
  ];
  //var_dump($colores);
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo array</title>
  </head>
  <body>
    <ul>
    <?php
      foreach ($colores as $key => $color) {
        echo"<li style='color:$color'>$key</li>";
      }
    ?>
    </ul>
  </body>
</html>
