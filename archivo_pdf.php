<?php

header("Content-Type: text/html;charset=utf-8_spanish_ci");

$mysqli = new mysqli('localhost', 'morosos', 'biblio7', 'koha_kobli');

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
              $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
              $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
              $fecha = $dias[date('w')].' '.date('d').' de '.$meses[date('n')-1]. ' del '.date('Y') ;

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
                         echo "<p class='western' lang='es-SV' align='left'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large;'><strong>Biblioteca Miguel de Cervantes</strong></span></span></p>";
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
                         echo "<br><br>";
                         echo "<p align='center'><img src='http://bibliotecaunicaes.catolica.edu.sv/wp-content/uploads/2020/06/FirmaCelina.png' width='125px' height='135px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='http://bibliotecaunicaes.catolica.edu.sv/wp-content/uploads/2020/06/SelloBMC.png' width='125px' height='135px'></p>";
                         echo "</td>";
                         echo "<tr>";
                         echo "<td>";
                         echo "<br><br>";
                         echo "<p class='western' lang='es-SV' align='center'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large; color:#000;'><strong>Msc. Celina del Rosario Baires</strong></span></span></p></strong></span></span></p>";
                         echo "</td>";
                         echo "</tr>";
                         echo "<tr>";
                         echo "<td>";
                         echo "<p class='western' lang='es-SV' align='center'><span style='font-family: 'Century Schoolbook L', serif;'><span style='font-size: large; color:#000;'><strong>Directora de la Biblioteca Miguel de Cervantes</strong></span></span></p></strong></span></span></p>";
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
