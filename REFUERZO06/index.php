<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM equipo");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <nav>
      <a href="index.php">Home</a>
      <a href="equipos.php">Equipos</a>
    </nav>
  </head>
  <body>
    <br>
  </body>
</html>
