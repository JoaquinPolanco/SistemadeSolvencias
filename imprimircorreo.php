<?php
include('config/database.php');
include('partials/header.php');
?>

<script src="<?= ROOT_URL ?>js/bibliotecas.js"></script>
<script src="<?= ROOT_URL ?>js/imprimir.js"></script>

<body style="background-color: #fff;">
  <!-- Start top -->
  <div class="container">
    <div class="topsolvencia">
      <div class="col-md-8">
        <h1>Solvencia de Biblioteca</h1>
      </div>
      <div class="col-md-4">
        <br>
        <h5><a href="#">Home</a>/Solvencia</h5>
      </div>
    </div>
  </div>
  <!-- end top -->

  <div class="container">
    <div class="row">
      <div class="col-md-2"><!-- seccion izquierda -->
        <br>
        <input class='btn btn-primary' name="Restablecer" type="button" value="Regresar" onClick="history.back()">
        <br>
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

            echo "<div id='muestra'>";
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
            echo "<p class='western' lang='es-SV' align='left'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'><strong id='sede'>[Sede]</strong></span></span></p>";
            echo "</td>";
            echo "<td><img src='http://www.catolica.edu.sv/wp-content/uploads/2017/04/logo-UNICAES-png.png' width='125px' height='135px'></td>";
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
            echo "<p align='center'><img id='firma' src='' width='125px' height='135px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img id='sello' src='' width='125px' height='135px'></p>";
            echo "</td>";
            echo "<tr>";
            echo "<td>";
            echo "<br><br><br>";
            echo "<p class='western' lang='es-SV' align='center'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large; color:#000;'><strong id='responsable'>[Responsable]</strong></span></span></p>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<p class='western' lang='es-SV' align='center'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large; color:#000;'><strong id='cargo'>[Cargo]</strong></span></span></p>";
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
        <br><br><br>
        <div class="panel panel-default">
          <div class="panel-body">
            <h3 align='center'>Eligir al Responsable de firmar</h3>
            <br>
            <button class='btn btn-default btn-lg btn-block' onclick="myFunctionBMC()">Biblioteca Miguel de Cervantes</button>
            <button class='btn btn-default btn-lg btn-block' onclick="myFunctionBRI()">Biblioteca Regional Ilobasco</button>
            <br>
            <input type='button' class='btn btn-success btn-lg btn-block' value='Imprimir Solvencia' onclick="javascript:imprSelec('muestra')" id="imprimir" disabled="true">
            <br>
          </div>
        </div>
        <br><br><br>
      </div>

      <div class="col-md-2"><!-- seccion derecha -->
        <!--          <br>
          <input type='button' class='btn btn-success' value='Imprimir Solvencia' onclick="javascript:imprSelec('muestra')"/>
--> <?php
    $codsolicitadas =  $_GET['var'];
    echo "<br>";
    echo "<a href='actualizarcorreo.php?var=$codsolicitadas'><button type='button' class='btn btn-primary'>Guardar Solvencia</button></a>";

    ?>

      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>