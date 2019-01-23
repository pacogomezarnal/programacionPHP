<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>
      <?php
        $nombre="Paco";
        $apellidos="Gomez Anal";
        echo $nombre;
      ?>
    </h3>
      <?php
          $edad=43;
          echo "<p>$edad</p>";
          $altura=1.75;
          echo "<br>La variable altura -->";
          var_dump($altura);
          $altura="1.75";
          echo "<br>La variable altura -->";
          var_dump($altura);
          echo "<br>";
          echo floor($altura*100);
          echo "<p>$nombre $apellidos, altura: $altura</p>";
      ?>
  </body>
</html>
