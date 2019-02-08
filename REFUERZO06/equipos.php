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
    <table>
      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Ciudad</td>
        <td>Partidos Jugados</td>
      </tr>
      <br>
      <?php
        foreach ($resultado as $equipo) {
          echo "<tr>";
          echo "<td><a href='jugadores.php?idEquipo=".$equipo['id_equipo']."'>".$equipo['id_equipo']."</a></td>";
          echo "<td>".$equipo['nombre']."</td>";
          echo "<td>".$equipo['ciudad']."</td>";
          echo "<td><a href='partidosEquipo.php?Partidos=".$equipo['id_equipo']."'>ver</a></td>";

          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
