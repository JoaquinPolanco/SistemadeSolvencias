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
      <br><h5>Registro Académico, Santa Ana</h5>
      </div>
     </div>
    </div>
    <!-- end top -->

    <div class="container">
      <div class="row">
        <div class="col-md-1"><!-- seccion izquierda -->
          <br>
            <input class='btn btn-primary' name="Restablecer" type="button" value="Regresar" onClick="history.back()">
        </div>

        <div class="col-md-10"><!-- seccion centro -->
          <br>
          <h2 style="text-align: center;">Solvencias solicitadas Santa Ana</h2>
          <br>
          <p>Buscar por Carnet, Nombre, Apellido o Carrera:</p>
          <form class="form-signin  col-md-10" method="POST" action="solvenciasregistro.php">
            <div class="col-md-4">
              <input type="text" name="buscar" class="form-control" placeholder="busqueda...">
            </div>
            <div class="col-md-2">
              <input type="submit" name="submit" value="Buscar" class="btn btn-success" role="button">
            </div>
          </form>


<?php
header("Content-Type: text/html;charset=utf-8_spanish_ci");

include('config/database.php');

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
         $consulta = "SELECT carnet, nombres, apellidos, carrera, fechasolicitud, tiposolvencia, codsolicitadas, estado FROM `solicitadas`
                        WHERE email = '' AND
                        impreso = '' AND
                        tiposolvencia LIKE 'gradu%' AND
                        facultad != '$ilobasco'
                        AND (carnet LIKE '%$buscar%' OR nombres LIKE '%$buscar%' OR apellidos LIKE '%$buscar%' OR carrera LIKE '%$buscar%')
                        ORDER BY fechasolicitud DESC";

         if ($resultado = $mysqli->query($consulta)) {
           echo "<br>";
           echo "<table class='bordered'>";
               echo "<thead>";
               echo "<tr>";
                   echo "<th>Carnet</th>";
                   echo "<th>Nombre</th>";
                   echo "<th>Apellido</th>";
                   echo "<th>Carrera</th>";
                   echo "<th>Fecha</th>";
                   echo "<th>Motivo</th>";
                   echo "<th>Estado</th>";
                   echo "<th></th>";
               echo "</tr>";
               echo "</thead>";
             /* obtener el array de objetos */
             while ($fila = $resultado->fetch_row()) {

                     echo "<tr>";
                         echo "<td>$fila[0]</td>";//carnet
                         echo "<td>$fila[1]</td>";//nombre
                         echo "<td>$fila[2]</td>";//apellido
                         echo "<td>$fila[3]</td>";//carera
                         echo "<td>$fila[4]</td>";//fecha
                         echo "<td>$fila[5]</td>";//motivo
                         echo "<td>$fila[7]</td>";//estado
                         echo "<td><a href='imprimirreg.php?var=$fila[6]'><button type='button' class='btn btn-link'>Imprimir</button></a></td>";//autor

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


    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
