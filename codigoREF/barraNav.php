<?php
$barra=["Inicio","Blog","Videos","Contacto"];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <ul class="w3-bar w3-black">
      <?php
        foreach ($barra as $item) {
          echo "<li class='w3-bar-item'>$item</li>";
        }
      ?>
    </ul>
  </body>
</html>
