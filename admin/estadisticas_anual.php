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
        <a href="estadisticas.php"><button type="button" class="btn btn-info">Regresar</button></a>
      </div>

      <div class="col-md-10"><!-- seccion centro -->
        <br>
        <h2 style="text-align: center;">Estadisticas de las solvencias solicitadas</h2>

        <?php

        $year = $_POST['year'];

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
        //consultas por genero inicio
        $consulta = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`titulo`='Srta' OR `titulo`='F')";

        if ($resultado = $mysqli->query($consulta)) {
          echo "<h3>Consulta por Género:</h3>";
          echo "<table class='bordered'>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Año consultado</th>";
          echo "<th>Mujeres</th>";
          echo "<th>Hombres</th>";
          echo "<th>Total</th>";
          echo "</tr>";
          echo "</thead>";
          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {

            echo "<tr>";
            echo "<td>$year</td>"; //año
            echo "<td>$fila[0]</td>"; //mujer
            $consulta2 = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE (`titulo`='sr' OR `titulo`='M') AND `fechasolicitud` LIKE '$year%'";
            if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                echo "<td>$fila[0]</td>"; //hombre
                $consulta3 = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%'";
                if ($resultado3 = $mysqli->query($consulta3)) {
                  /* obtener el array de objetos */
                  while ($fila = $resultado3->fetch_row()) {
                    echo "<td>$fila[0]</td>"; //total
                  }
                }
              }
            }
          }
          echo "</table>";


          /* liberar el conjunto de resultados */
          $resultado->close();
        }
        //consultas por genero fin
        //
        //consultas por facultad inicio
        $consulta = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`facultad` LIKE '%humanidad%' OR `facultad` LIKE '1%')";

        if ($resultado = $mysqli->query($consulta)) {
          echo "<br>";
          echo "<h3>Consulta por Facultad:</h3>";
          echo "<table class='bordered'>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Año consultado</th>";
          echo "<th>C. Humanidades</th>";
          echo "<th>C. Empresariales</th>";
          echo "<th>Ingeniería y Arquitectura</th>";
          echo "<th>Ciencias de la Salud</th>";
          echo "<th>Total</th>";
          echo "</tr>";
          echo "</thead>";
          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {

            echo "<tr>";
            echo "<td>$year</td>"; //año
            echo "<td>$fila[0]</td>"; //humanidades
            $consulta2 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`facultad` LIKE '%empresa%' OR `facultad` LIKE '8%')";
            if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                echo "<td>$fila[0]</td>"; //Empresariales
                $consulta3 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`facultad` LIKE '%ingeni%' OR `facultad` LIKE '6%')";
                if ($resultado3 = $mysqli->query($consulta3)) {
                  /* obtener el array de objetos */
                  while ($fila = $resultado3->fetch_row()) {
                    echo "<td>$fila[0]</td>"; //Empresariales
                    $consulta4 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`facultad` LIKE '%salud%' OR `facultad` LIKE '5%')";
                    if ($resultado4 = $mysqli->query($consulta4)) {
                      /* obtener el array de objetos */
                      while ($fila = $resultado4->fetch_row()) {
                        echo "<td>$fila[0]</td>"; //Salud
                        $consulta5 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%'";
                        if ($resultado5 = $mysqli->query($consulta5)) {
                          /* obtener el array de objetos */
                          while ($fila = $resultado5->fetch_row()) {
                            echo "<td>$fila[0]</td>"; //total
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
          echo "</table>";


          /* liberar el conjunto de resultados */
          $resultado->close();
        }
        //consultas por facultad fin
        //
        //consultas por Motivo inicio
        $consulta = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'graduacion' AND `fechasolicitud` LIKE '$year%'";

        if ($resultado = $mysqli->query($consulta)) {
          echo "<br>";
          echo "<h3>Consulta por Motivo:</h3>";
          echo "<table class='bordered'>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Año consultado</th>";
          echo "<th>Graduación</th>";
          echo "<th>Reingreso</th>";
          echo "<th>Retiro</th>";
          echo "<th>Otros</th>";
          echo "<th>Total</th>";
          echo "</tr>";
          echo "</thead>";
          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {

            echo "<tr>";
            echo "<td>$year</td>"; //periodo
            echo "<td>$fila[0]</td>"; //graduacion
            $consulta2 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'reingreso' AND `fechasolicitud` LIKE '$year%'";
            if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                echo "<td>$fila[0]</td>"; //Reingreso
                $consulta3 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'retiro' AND `fechasolicitud` LIKE '$year%'";
                if ($resultado3 = $mysqli->query($consulta3)) {
                  /* obtener el array de objetos */
                  while ($fila = $resultado3->fetch_row()) {
                    echo "<td>$fila[0]</td>"; //Retiro
                    $consulta4 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'otros' AND `fechasolicitud` LIKE '$year%'";
                    if ($resultado4 = $mysqli->query($consulta4)) {
                      /* obtener el array de objetos */
                      while ($fila = $resultado4->fetch_row()) {
                        echo "<td>$fila[0]</td>"; //Otros
                        $consulta5 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%'";
                        if ($resultado5 = $mysqli->query($consulta5)) {
                          /* obtener el array de objetos */
                          while ($fila = $resultado5->fetch_row()) {
                            echo "<td>$fila[0]</td>"; //total
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
          echo "</table>";
          echo "<br>";
          echo "<br>";
          echo "<br>";

          /* liberar el conjunto de resultados */
          $resultado->close();
        }
        //consultas por motivo fin

        /* cerrar la conexi&oacute;n */
        $mysqli->close();

        ?>

      </div>


      <div class="col-md-2"><!-- seccion derecha --></div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>