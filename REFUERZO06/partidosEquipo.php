<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $id=$_GET["Partidos"];
  $resultadoLocal = $conexion->query("SELECT * FROM partido WHERE local=".$id);
  $resultadoVisitante = $conexion->query("SELECT * FROM partido WHERE visitante=".$id);
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
        <td>Local</td>
        <td>Visitante</td>
        <td>Resultado</td>
        <td>Fecha</td>
        <td>Arbitro</td>
      </tr>
      <br>
      <?php
        foreach ($resultadoLocal as $partido1) {
          echo "<tr>";
          echo "<td>".$partido1['id_partido']."</td>";
          echo "<td>".$partido1['local']."</td>";
          echo "<td>".$partido1['visitante']."</td>";
          echo "<td>".$partido1['resultado']."</td>";
          echo "<td>".$partido1['fecha']."</td>";
          echo "<td>".$partido1['arbitro']."</td>";
          echo "</tr>";
        }

        foreach ($resultadoVisitante as $partido2) {
          echo "<tr>";
          echo "<td>".$partido2['id_partido']."</td>";
          echo "<td>".$partido2['local']."</td>";
          echo "<td>".$partido2['visitante']."</td>";
          echo "<td>".$partido2['resultado']."</td>";
          echo "<td>".$partido2['fecha']."</td>";
          echo "<td>".$partido2['arbitro']."</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
