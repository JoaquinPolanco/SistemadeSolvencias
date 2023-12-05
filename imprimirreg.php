<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- redes sociles-->
    <meta property="og:title" content="Social Buttons for Bootstrap" />
    <meta property="og:description" content="Social Sign-In Buttons made in pure CSS based on Bootstrap and Font Awesome!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://lipis.github.io/bootstrap-social/" />
    <meta property="og:image" content="http://lipis.github.io/bootstrap-social/assets/img/bootstrap-social.png" />


    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script type="text/javascript">
      function imprSelec(muestra) {
        var ficha=document.getElementById(muestra);
        var ventimp=window.open(' ','popimpr');
        ventimp.document.write(ficha.innerHTML);
        ventimp.document.close();
        ventimp.print();
        ventimp.close();

        }
    </script>
<!--
http://www.catalogo.catolica.edu.sv/cgi-bin/koha/Solvencia/
/OPAC/Solvencia/
-->
    <script>
    function myFunctionBMC() {
        document.getElementById("responsable").innerHTML = "Msc. Celina del Rosario Baires";
        document.getElementById("cargo").innerHTML = "Directora de la Biblioteca Miguel de Cervantes";
        document.getElementById("sede").innerHTML = "Biblioteca Miguel de Cervantes";
        document.getElementById('imprimir').disabled = false;
        document.getElementById('firma').src = "http://bibliotecaunicaes.catolica.edu.sv/wp-content/uploads/2020/06/FirmaCelina.png";
        document.getElementById('sello').src = "http://bibliotecaunicaes.catolica.edu.sv/wp-content/uploads/2020/06/SelloBMC.png";
    }
    function myFunctionBRI() {
      document.getElementById("responsable").innerHTML = "Msc. Rolando Geovanni Ramírez Contreras";
      document.getElementById("cargo").innerHTML = "Director de la Biblioteca Ilobasco";
      document.getElementById("sede").innerHTML = "Biblioteca Regional de Ilobasco";
      document.getElementById('imprimir').disabled = false;
      document.getElementById('firma').src = "http://bibliotecaunicaes.catolica.edu.sv/wp-content/uploads/2020/06/FirmaRolando.png";
      document.getElementById('sello').src = "http://bibliotecaunicaes.catolica.edu.sv/wp-content/uploads/2020/06/SelloBRI.png";
    }
    </script>
          <!--[if lt IE 9]>

        <script type="text/javascript"> no se para que sirve
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-42119746-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>

      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style media="screen">

    *::-moz-selection{
       background: #fff;
       color: #01a2a6;
    }

    *::selection {
       background: #fff;
       color: #01a2a6;
    }

    .topsolvencia {
      background-color:#01a2a6;
      height: 80px;
      }
      .topsolvencia h1 {
        font-family: "Sans";
        font-size: 22px;
      }
      .topsolvencia h5 {
        font-family: "Sans";
        font-size: 10px;
      }
      .topsolvencia, h1, h5, a, a:link {
        color: #fff;
        text-decoration: none;
      }
      .topsolvencia, a:link {
        color: fff;
        text-decoration: none;
      }
    /*icono de youtube */
    .btn-youtube{color:#fff;background-color:#FF261B;border-color:rgba(0,0,0,0.2)}.btn-youtube:hover,.btn-youtube:focus,.btn-youtube:active,.btn-youtube.active,.open .dropdown-toggle.btn-youtube{color:#fff;background-color:#E62117;border-color:rgba(0,0,0,0.2)}
    .btn-youtube:active,.btn-youtube.active,.open .dropdown-toggle.btn-youtube{background-image:none}
    .btn-youtube.disabled,.btn-youtube[disabled],fieldset[disabled] .btn-youtube,.btn-youtube.disabled:hover,.btn-youtube[disabled]:hover,fieldset[disabled] .btn-youtube:hover,.btn-youtube.disabled:focus,.btn-youtube[disabled]:focus,fieldset[disabled] .btn-youtube:focus,.btn-youtube.disabled:active,.btn-youtube[disabled]:active,fieldset[disabled] .btn-youtube:active,.btn-youtube.disabled.active,.btn-youtube[disabled].active,fieldset[disabled] .btn-youtube.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}

    .rightsolvencia {
      text-align: justify;
      line-height: 3;
      }
      .rightsolvencia p, ul {
      color: #8e8f94;
      }
      .rightsolvencia span{
        color: #01a2a6;
        margin-left: -40px;
        font-size: 20px;
      }

    #barrasocial ul {
       list-style-type: none;
       text-align: justify;
      }
      #barrasocial li{
       display: inline;
       text-align: center;
       margin: 0 10px 0 0;
      }

      table {
          *border-collapse: collapse; /* IE7 and lower */
          border-spacing: 0;
          }

      .bordered {
        border: solid #ccc 1px;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
        border-radius: 6px;
        -webkit-box-shadow: 0 1px 1px #ccc;
        -moz-box-shadow: 0 1px 1px #ccc;
        box-shadow: 0 1px 1px #ccc;
      }

      .bordered tr:hover {
        background: #eafbfb;
        -o-transition: all 0.1s ease-in-out;
        -webkit-transition: all 0.1s ease-in-out;
        -moz-transition: all 0.1s ease-in-out;
        -ms-transition: all 0.1s ease-in-out;
        transition: all 0.1s ease-in-out;
      }
      .bordered td, .bordered th {
        border-left: 1px solid #ccc;
        border-top: 1px solid #ccc;
        padding: 10px;
        text-align: center;
      }
      .bordered th {
          background-color: #dce9f9;
          background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
          background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
          background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
          background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
          background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
          background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
          -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
          -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;
          box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
          border-top: none;
          text-shadow: 0 1px 0 rgba(255,255,255,.5);
      }
      .bordered td:first-child, .bordered th:first-child {
          border-left: none;
      }
      .bordered th:first-child {
          -moz-border-radius: 6px 0 0 0;
          -webkit-border-radius: 6px 0 0 0;
          border-radius: 6px 0 0 0;
      }

      .bordered th:last-child {
          -moz-border-radius: 0 6px 0 0;
          -webkit-border-radius: 0 6px 0 0;
          border-radius: 0 6px 0 0;
      }

      .bordered th:only-child{
          -moz-border-radius: 6px 6px 0 0;
          -webkit-border-radius: 6px 6px 0 0;
          border-radius: 6px 6px 0 0;
      }

      .bordered tr:last-child td:first-child {
          -moz-border-radius: 0 0 0 6px;
          -webkit-border-radius: 0 0 0 6px;
          border-radius: 0 0 0 6px;
      }

      .bordered tr:last-child td:last-child {
          -moz-border-radius: 0 0 6px 0;
          -webkit-border-radius: 0 0 6px 0;
          border-radius: 0 0 6px 0;
      }

    </style>


  </head>
  <body style="background-color: #fff;">
    <!-- Start top -->
    <div class="container">
     <div class="topsolvencia">
      <div class="col-md-8">
        <h1>Solvencia de Biblioteca</h1>
      </div>
    <div class="col-md-4">
      <br><h5><a href="#">Home</a>/Solvencia</h5>
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

header("Content-Type: text/html;charset=utf-8_spanish_ci");

include('config/database.php');

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
-->     <?php
          $codsolicitadas =  $_GET['var'];
          echo "<br>";
          echo "<a href='actualizarreg.php?var=$codsolicitadas'><button type='button' class='btn btn-primary'>Guardar Solvencia</button></a>";

           ?>

        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
