<?php
include('config/database.php');
include('partials/header.php');
include('partials/menu.php')
?>

<body>

  <div class="container">
    <div class="col-md-25 text-center"><!-- seccion centro -->
      <br>
      <h2 class="text-center">SOLVENCIAS SOLICITADAS EN SANTA ANA</h2>
      <br>

      <nav class="navbar bg-body-tertiary">

        <div class="row justify-content-left">
          <div class="col-md-200">
            <form class="row g-2" method="POST" action="solvencias_cervantes.php">
              <div class="col-md-10">
                <input type="text" name="buscar" class="form-control" placeholder="Carnet, Nombre o Carrera">
              </div>
              <div class="col-md-1">
                <button type="submit" name="submit" class="btn btn-dark">Buscar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
    </nav>


    <?php

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
    $buscar = $_POST['buscar'];
    $ilobasco = "FACULTAD MULTIDISCIPLINARIA DE ILOBASCO";
    $consulta = "SELECT carnet, nombres, apellidos, carrera, fechasolicitud, tiposolvencia, codsolicitadas, estado, email FROM `solicitadas`
                            WHERE email != '' AND
                            impreso = '' AND
                            facultad != '$ilobasco' AND
                            (carnet LIKE '%$buscar%' OR nombres LIKE '%$buscar%' OR apellidos LIKE '%$buscar%' OR carrera LIKE '%$buscar%')
                            ORDER BY fechasolicitud DESC";
    //$consulta = "SELECT carnet, nombres, apellidos, carrera, fechasolicitud, tiposolvencia, codsolicitadas, estado, email FROM `solicitadas` WHERE email != '' AND impreso = '' AND facultad != '$ilobasco' ORDER BY fechasolicitud DESC";

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
      echo "<th>Estado</th>";
      echo "<th>E-mail</th>";
      echo "<th>Imprimir</th>";
      echo "<th>Guardar</th>";
      echo "</tr>";
      echo "</thead>";

      /* obtener el array de objetos */
      while ($fila = $resultado->fetch_row()) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td class='border-bottom'>$fila[0]</td>"; //carnet
        echo "<td class='border-bottom'>$fila[1]</td>"; //nombre
        echo "<td class='border-bottom'>$fila[2]</td>"; //apellido
        echo "<td class='border-bottom'>$fila[3]</td>"; //carera
        echo "<td class='border-bottom'>$fila[4]</td>"; //fecha
        echo "<td class='border-bottom'>$fila[5]</td>"; //motivo
        echo "<td class='border-bottom'>$fila[7]</td>"; //estado
        echo "<td class='border-bottom'>$fila[8]</td>"; //email
        echo "<td class='border-bottom'><a href='imprimir_cervantes.php?var=$fila[6]'><button type='button' class='btn btn-dark'>Imprimir</button></a></td>";
        echo "<td class='border-bottom'><a href='descargar_cervantes.php?var=$fila[6]'><button type='button' class='btn btn-dark'>Descargar</button></a></td>";
        echo "</tr>";
        echo "</tbody>";
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
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    function recargarPagina() {
      location.reload();
    }
  </script>
</body>

</html>