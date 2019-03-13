<?php
if (isset($_GET["msg"])) {
  echo $_GET["msg"];
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Perfil</h3>
    <form class="" action="comprobar.php" method="post" onsubmit="return comprobar();">
      Dame tu nombre:
      <input type="text" name="nombre" value="" id="nombre">
      <br><br>
      Num Personas:
      <input type="text" name="numero" value="" id="numero" required>
      <br><br>
      <input type="submit" name="" value="ENVIAR" >
    </form>
    <script type="text/javascript" src="comprobar.js"></script>
  </body>
</html>
