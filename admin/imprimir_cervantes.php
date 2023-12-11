<?php
include('config/database.php');
include('partials/header.php');
?>

<script src="<?= ROOT_URL ?>js/bibliotecas.js"></script>
<script src="<?= ROOT_URL ?>js/imprimir.js"></script>

<!-- Agrega una hoja de estilo específica para la impresión -->
<style type="text/css" media="print">
  .no-imprimir {
    display: none;
  }
</style>

<body style="background-color: #fff;">

  <div class="container">
    <div class="row">
      <div class="col-md-2"><!-- seccion izquierda -->
        <br>
        <input class='btn btn-primary no-imprimir' name="Restablecer" type="button" value="Regresar" onClick="history.back()">
        <br>
        <br>
        <!-- Botón de impresión -->
        <button class='btn btn-success no-imprimir' onclick="imprimirSolvencia()">Imprimir</button>
      </div>
      <div class="col-md-8"><!-- seccion centro -->

        <?php

        $codsolicitadas =  $_GET['var'];

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
        $consulta = "SELECT carnet, nombres, apellidos, carrera, fechasolicitud, tiposolvencia, codsolicitadas FROM `solicitadas` WHERE codsolicitadas = '$codsolicitadas'";

        if ($resultado = $mysqli->query($consulta)) {

          while ($fila = $resultado->fetch_row()) {
            //echo "$fila[0]";//carnet
            //echo "$fila[1]";//nombre
            //echo "$fila[2]";//apellido
            //echo "$fila[3]";//carera
            //echo "$fila[4]";//fecha
            //echo "$fila[5]";//motivo
            $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
            $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
            $fecha = $dias[date('w')] . ' ' . date('d') . ' de ' . $meses[date('n') - 1] . ' del ' . date('Y');

            echo "<div>";
            echo "<table class='tabla'>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>";
            echo "<table>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>";
            echo "<br>";
            echo "<p class='western' lang='es-SV' align='left'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'><strong>UNIVERSIDAD CAT&Oacute;LICA DE EL SALVADOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></span></p>";
            echo "<p class='western' lang='es-SV' align='left'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large; color:#000;'><strong>Biblioteca Miguel de Cervantes</strong></span></span></p>";
            echo "</td>";
            echo "<td><img src='../images/logo-unicaes-hd.png' width='125px' height='130px'></td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p class='western' lang='es-SV' align='left'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'><strong>________________________________________________________________________________</strong></span></span></p><br>";
            echo "<p class='western' lang='es-SV' align='center'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;''><u>SOLVENCIA</u></span></span></p>";
            echo "<br>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p class='western' lang='es-SV' align='justify'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'>Por medio de la presente se hace constar que:</span></span></p>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<br>";
            echo "<h3 class='western' lang='es-SV' align='justify'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'><span style='text-transform: uppercase; color:#000;'><strong>$fila[1] $fila[2]</strong></span></span></span></h3><br>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p class='western' lang='es-SV' align='justify'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'>con el carnet de estudiante:&nbsp;</span></span><span style='color: #000000;'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'><strong>$fila[0]</strong></span></span></span></p>";
            echo "<br>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p class='western' lang='es-SV' align='justify'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'>y de la carrera: </span></span><span style='color: #000000;'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'><strong>$fila[3]</strong></span></span></span></p>";
            echo "<br>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p class='western' lang='es-SV' align='justify'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'>est&aacute; solvente con la Biblioteca de esta Universidad, hasta la presente fecha.</span></span></p>";
            echo "<br>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p class='western' lang='es-SV' align='justify'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'>Santa Ana, $fecha.</span></span></p>";
            echo "</td>";
            echo "</tr>";
            echo "<td>";
            echo "<br><br><br><br>";
            echo "<p align='center'><img src='../images/FirmaCelina.png' width='125px' height='135px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../images/SelloBMC.png' width='125px' height='135px'></p>";
            echo "</td>";
            echo "<tr>";
            echo "<td>";
            echo "<br><br><br>";
            echo "<p class='western' lang='es-SV' align='center'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large; color:#000;'><strong>Msc. Celina del Rosario Baires</strong></span></span></p>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p class='western' lang='es-SV' align='center'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large; color:#000;'><strong>Directora de la Biblioteca Miguel de Cervantes</strong></span></span></p>";
            echo "</td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
          }

          /* liberar el conjunto de resultados */
          $resultado->close();
        }

        /* cerrar la conexi&oacute;n */
        $mysqli->close();

        ?>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
      function imprimirSolvencia() {
        window.print();
      }
    </script>
  </div>
</body>

</html>