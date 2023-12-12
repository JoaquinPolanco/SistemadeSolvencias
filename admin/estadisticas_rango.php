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
        <h2 style="text-align: center;">ESTADÍSTICAS POR PERÍODO DE TIEMPO</h2>
        <br>

        <?php

        $date1 = $_POST['dateinicio'];
        $date2 = $_POST['datefin'];

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
        $consulta = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2' AND (`titulo`='F' OR `titulo`='srta')";

        if ($resultado = $mysqli->query($consulta)) {
          echo "<h3>POR GÉNERO:</h3>";
          echo "<table class='table table-bordered'>";
          echo "<thead class='table-dark text-center'>";
          echo "<tr>";
          echo "<th>Periodo consultado</th>";
          echo "<th>Mujeres</th>";
          echo "<th>Hombres</th>";
          echo "<th>Total</th>";
          echo "</tr>";
          echo "</thead>";
          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {

            echo "<tr>";
            echo "<td>$date1 - $date2</td>"; //periodo
            echo "<td>$fila[0]</td>"; //mujer
            $consulta2 = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2' AND (`titulo`='M' OR `titulo`='sr')";
            if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                echo "<td>$fila[0]</td>"; //hombre
                $consulta3 = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2'";
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
        $consulta = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2' AND (`facultad` LIKE '%humanidad%' OR `facultad` LIKE '1%')";

        if ($resultado = $mysqli->query($consulta)) {
          echo "<br>";
          echo "<h3>POR FACULTAD:</h3>";
          echo "<table class='table table-bordered'>";
          echo "<thead class='table-dark text-center'>";
          echo "<tr>";
          echo "<th>Periodo consultado</th>";
          echo "<th>Ciencias y Humanidades</th>";
          echo "<th>Ciencias Empresariales</th>";
          echo "<th>Ingeniería y Arquitectura</th>";
          echo "<th>Ciencias de la Salud</th>";
          echo "<th>Escuela de Posgrados</th>";
          echo "<th>Facultad Multidisciplinaria de Ilobasco</th>";
          echo "<th>Facultad en Blanco</th>";
          echo "<th>Total</th>";
          echo "</tr>";
          echo "</thead>";
          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {

            echo "<tr>";
            echo "<td>$date1 - $date2</td>"; //periodo
            echo "<td>$fila[0]</td>"; //humanidades
            $consulta2 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2' AND (`facultad` LIKE '%empresa%' OR `facultad` LIKE '8%')";
            if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                echo "<td>$fila[0]</td>"; //Empresariales
                $consulta3 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2' AND (`facultad` LIKE '%ingeni%' OR `facultad` LIKE '6%')";
                if ($resultado3 = $mysqli->query($consulta3)) {
                  /* obtener el array de objetos */
                  while ($fila = $resultado3->fetch_row()) {
                    echo "<td>$fila[0]</td>"; //Empresariales
                    $consulta4 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2' AND (`facultad` LIKE '%salud%' OR `facultad` LIKE '5%')";
                    if ($resultado4 = $mysqli->query($consulta4)) {
                      /* obtener el array de objetos */
                      while ($fila = $resultado4->fetch_row()) {
                        echo "<td>$fila[0]</td>"; //Salud
                        $consulta6 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2'AND (`facultad` LIKE '%escuela de posgrado%' OR `facultad` LIKE '%escuela de postgrado%')";
                        if ($resultado6 = $mysqli->query($consulta6)) {
                          /* obtener el array de objetos */
                          while ($fila = $resultado6->fetch_row()) {
                            echo "<td>$fila[0]</td>"; //escuela de posgrado
                          }
                        }
                        $consulta7 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2' AND (`facultad` LIKE '%ilobasco%' OR `facultad` LIKE '%paracentral%')";
                        if ($resultado7 = $mysqli->query($consulta7)) {
                          /* obtener el array de objetos */
                          while ($fila = $resultado7->fetch_row()) {
                            echo "<td>$fila[0]</td>"; //Facultad Multidisciplinaria de Ilobasco
                          }
                        }
                        $consulta8 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2' AND `facultad` = ''";
                        if ($resultado8 = $mysqli->query($consulta8)) {
                          /* obtener el array de objetos */
                          while ($fila = $resultado8->fetch_row()) {
                            echo "<td>$fila[0]</td>"; //Facultad En blanco
                          }
                        }
                        $consulta5 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2'";
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
        $consulta = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'graduacion' AND `fechasolicitud` BETWEEN '$date1' AND '$date2'";

        if ($resultado = $mysqli->query($consulta)) {
          echo "<br>";
          echo "<h3>POR MOTIVO:</h3>";
          echo "<table class='table table-bordered'>";
          echo "<thead class='table-dark text-center'>";
          echo "<tr>";
          echo "<th>Periodo consultado</th>";
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
            echo "<td>$date1 - $date2</td>"; //periodo
            echo "<td>$fila[0]</td>"; //graduacion
            $consulta2 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'reingreso' AND `fechasolicitud` BETWEEN '$date1' AND '$date2'";
            if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                echo "<td>$fila[0]</td>"; //Reingreso
                $consulta3 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'retiro' AND `fechasolicitud` BETWEEN '$date1' AND '$date2'";
                if ($resultado3 = $mysqli->query($consulta3)) {
                  /* obtener el array de objetos */
                  while ($fila = $resultado3->fetch_row()) {
                    echo "<td>$fila[0]</td>"; //Retiro
                    $consulta4 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'otros' AND `fechasolicitud` BETWEEN '$date1' AND '$date2'";
                    if ($resultado4 = $mysqli->query($consulta4)) {
                      /* obtener el array de objetos */
                      while ($fila = $resultado4->fetch_row()) {
                        echo "<td>$fila[0]</td>"; //Otros
                        $consulta5 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `fechasolicitud` BETWEEN '$date1' AND '$date2'";
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