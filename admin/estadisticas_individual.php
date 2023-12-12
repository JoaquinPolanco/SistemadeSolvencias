<?php
include('config/database.php');
include('partials/header.php');
include('partials/menu.php');

?>

<body style="background-color: #fff;">

  <div class="container">
    <div class="row">
      <div class="col-md-1"><!-- seccion izquierda -->
        <br>
        <a href="estadisticas.php"><button type="button" class="btn btn-dark">Regresar</button></a>
      </div>

      <div class="col-md-10"><!-- seccion centro -->
        <br>
        <h2 style="text-align: center;">SOLVENCIAS SOLICITADAS</h2>

        <?php
        $buscar = $_POST['buscar'];

        /* comprueba la conexi&oacute;n */
        if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
        }
        /* devuelve el nombre de la base de datos actualmente seleccionada */
        if ($result = $mysqli->query("SELECT DATABASE()")) {
          $row = $result->fetch_row();
          $result->close();
        }
        //$consulta = "SELECT title, firstname, surname, othernames, userid FROM borrowers WHERE userid = '$carnet'";
        $consulta = "SELECT carnet, nombres, apellidos, carrera, fechasolicitud, tiposolvencia, codsolicitadas FROM `solicitadas` WHERE carnet LIKE '%$buscar%' OR nombres LIKE '%$buscar%' OR apellidos LIKE '%$buscar%'";

        if ($resultado = $mysqli->query($consulta)) {
          echo "<br>";
          echo "<table class='table table-bordered'>";
          echo "<thead class='table-dark text-center'>";
          echo "<tr>";
          echo "<th>Carnet</th>";
          echo "<th>Nombre</th>";
          echo "<th>Apellido</th>";
          echo "<th>Carrera</th>";
          echo "<th>Fecha</th>";
          echo "<th>Motivo</th>";
          echo "</tr>";
          echo "</thead>";
          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {

            echo "<tr>";
            echo "<td>$fila[0]</td>"; //carnet
            echo "<td>$fila[1]</td>"; //nombre
            echo "<td>$fila[2]</td>"; //apellido
            echo "<td>$fila[3]</td>"; //carera
            echo "<td>$fila[4]</td>"; //fecha
            echo "<td>$fila[5]</td>"; //motivo
            echo "</tr>";
            echo "</tr> ";
          }
          echo "</table>";
          echo "<br>";

          /* liberar el conjunto de resultados */
          $resultado->close();
        }

        /* cerrar la conexi&oacute;n */
        $mysqli->close();

        ?>

      </div>


      <div class="col-md-2"><!-- seccion derecha --></div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>