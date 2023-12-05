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
      <br><h5><a href="http://www.catalogo.catolica.edu.sv/cgi-bin/koha/Solvencia/versolvencias.php">Home</a>/Solvencia</h5>
      </div>
     </div>
    </div>
    <!-- end top -->

    <div class="container">
      <div class="row">
        <div class="col-md-1"><!-- seccion izquierda -->
          <br>
            <a href="http://www.catalogo.catolica.edu.sv/cgi-bin/koha/Solvencia/estadisticas.php"><button type="button" class="btn btn-info">Regresar</button></a>
        </div>

        <div class="col-md-10"><!-- seccion centro -->
          <br>
          <h2 style="text-align: center;">Estadisticas de las solvencias solicitadas</h2>

<?php
header("Content-Type: text/html;charset=utf-8_spanish_ci");

include('config/database.php');
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
         $consulta = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`titulo`='sra' OR `titulo`='srta')";

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
                         echo "<td>$year</td>";//año
                         echo "<td>$fila[0]</td>";//mujer
          $consulta2 = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE `titulo`='sr' AND `fechasolicitud` LIKE '$year%'";
          if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                         echo "<td>$fila[0]</td>";//hombre
                         $consulta3 = "SELECT COUNT(`titulo`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%'";
                         if ($resultado3 = $mysqli->query($consulta3)) {
                             /* obtener el array de objetos */
                             while ($fila = $resultado3->fetch_row()) {
                                        echo "<td>$fila[0]</td>";//total
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
                         echo "<td>$year</td>";//año
                         echo "<td>$fila[0]</td>";//humanidades
          $consulta2 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`facultad` LIKE '%empresa%' OR `facultad` LIKE '8%')";
          if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                         echo "<td>$fila[0]</td>";//Empresariales
             $consulta3 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`facultad` LIKE '%ingeni%' OR `facultad` LIKE '6%')";
             if ($resultado3 = $mysqli->query($consulta3)) {
                             /* obtener el array de objetos */
                 while ($fila = $resultado3->fetch_row()) {
                          echo "<td>$fila[0]</td>";//Empresariales
                      $consulta4 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%' AND (`facultad` LIKE '%salud%' OR `facultad` LIKE '5%')";
                        if ($resultado4 = $mysqli->query($consulta4)) {
                                        /* obtener el array de objetos */
                            while ($fila = $resultado4->fetch_row()) {
                                     echo "<td>$fila[0]</td>";//Salud
                                  $consulta5 = "SELECT COUNT(`facultad`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%'";
                                  if ($resultado5 = $mysqli->query($consulta5)) {
                                         /* obtener el array de objetos */
                                       while ($fila = $resultado5->fetch_row()) {
                                                  echo "<td>$fila[0]</td>";//total
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
                         echo "<td>$year</td>";//periodo
                         echo "<td>$fila[0]</td>";//graduacion
          $consulta2 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'reingreso' AND `fechasolicitud` LIKE '$year%'";
          if ($resultado2 = $mysqli->query($consulta2)) {
              /* obtener el array de objetos */
              while ($fila = $resultado2->fetch_row()) {
                         echo "<td>$fila[0]</td>";//Reingreso
             $consulta3 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'retiro' AND `fechasolicitud` LIKE '$year%'";
             if ($resultado3 = $mysqli->query($consulta3)) {
                             /* obtener el array de objetos */
                 while ($fila = $resultado3->fetch_row()) {
                          echo "<td>$fila[0]</td>";//Retiro
                      $consulta4 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `tiposolvencia` = 'otros' AND `fechasolicitud` LIKE '$year%'";
                        if ($resultado4 = $mysqli->query($consulta4)) {
                                        /* obtener el array de objetos */
                            while ($fila = $resultado4->fetch_row()) {
                                     echo "<td>$fila[0]</td>";//Otros
                                  $consulta5 = "SELECT COUNT(`tiposolvencia`) FROM `solicitadas` WHERE `fechasolicitud` LIKE '$year%'";
                                  if ($resultado5 = $mysqli->query($consulta5)) {
                                         /* obtener el array de objetos */
                                       while ($fila = $resultado5->fetch_row()) {
                                                  echo "<td>$fila[0]</td>";//total
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
