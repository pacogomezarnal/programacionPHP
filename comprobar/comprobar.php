<?php
if(isset($_POST["nombre"])){
  echo $_POST["nombre"];
}else{
  header("Location: http://localhost/programacionPHP/comprobar/index.php?msg=Sin datos");
}
 ?>
