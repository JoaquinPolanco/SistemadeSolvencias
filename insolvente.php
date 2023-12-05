<?php
include('config/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Social Buttons for Bootstrap" />
  <meta property="og:description" content="Social Sign-In Buttons made in pure CSS based on Bootstrap and Font Awesome!" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://lipis.github.io/bootstrap-social/" />
  <meta property="og:image" content="http://lipis.github.io/bootstrap-social/assets/img/bootstrap-social.png" />

  <link rel="icon" href="firmas/logo-unicaes-hd.png" type="image/png">
  <title>Solvencias Biblioteca</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="recursos/tablas.css">
  <link rel="stylesheet" href="<?php echo 'recursos/botones.css'; ?>">

</head>

<body style="background-color: #fff;">

  <div class="container text-center">
    <div class="row">
      <div class="col-md-8"><!-- seccion izquierda -->
        <h1><img src="firmas/logo-unicaes-hd.png" alt="Logo" style="max-width: 100px; height: auto;"> Biblioteca Miguel de Cervantes </h1>
        <h2>&iquest;Tu informaci&oacute;n es correcta?</h2>
        <?php

        $carnet = $_GET['var1'];
        $email = $_GET['var2'];

        /* comprobar la conexi&oacute;n */
        if (mysqli_connect_errno()) {
          printf("Fall&oacute; la conexi&oacute;n: %s\n", mysqli_connect_error());
          exit();
        }

        $consulta1 = "SELECT title, firstname, surname, othernames, userid, initials FROM borrowers WHERE userid = '$carnet'";

        if ($resultado = $mysqli->query($consulta1)) {

          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {
            echo "<p>Lamentamos informarte que no te encuentras solvente con la Biblioteca, a continuación, se muestra un formulario con la información relacionada a tu número de carnet.</p>";
            echo "<table class='bordered'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th> </th>";
            echo "<th>Nombre</th>";
            echo "<th>Apellido</th>";
            echo "<th>Carrera</th>";
            echo "<th>Carnet</th>";
            echo "<th>E-mail</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tr>";
            echo "<td>$fila[0]</td>";
            echo "<td>$fila[1]</td>";
            echo "<td>$fila[2]</td>";
            echo "<td>$fila[3]</td>";
            echo "<td>$fila[4]</td>";
            echo "<td>$email</td>";
            echo "</tr>";
            echo "</table>";
            echo "<br>";
            echo "<p>Si la información es correcta y corresponde a tu número de carnet, haz clic en el <b>Motivo</b> por el que la necesitas y puedes pasar por tu solvencia de biblioteca a la oficina técnica en la fecha indicada:</p>";

            // Función para generar un formulario con botón
            function generateForm($action, $tipo, $label, $estado)
            {
              global $fila, $email;
              echo "<form class='form-signin col-md-3' method='POST' action='$action'>";
              echo "<input type='hidden' name='titulo' value='$fila[0]'>";
              echo "<input type='hidden' name='nombre' value='$fila[1]'>";
              echo "<input type='hidden' name='apellido' value='$fila[2]'>";
              echo "<input type='hidden' name='carrera' value='$fila[3]'>";
              echo "<input type='hidden' name='carnet' value='$fila[4]'>";
              echo "<input type='hidden' name='facultad' value='$fila[5]'>";
              echo "<input type='hidden' name='email' value='$email'>";
              echo "<input type='hidden' name='tipo' value='$tipo'>";
              echo "<input type='hidden' name='estado' value='$estado'>";
              echo "<input type='submit' name='submit' value='$label' class='custom-button ' role='button'>";
              echo "</form>";
            }

            // Generar formularios para cada tipo y estado
            generateForm('solicitadagra.php', 'GRADUACIÓN', 'Graduación', 'insolvente');
            generateForm('solicitadarei.php', 'REINGRESO', 'Reingreso', 'insolvente');
            generateForm('solicitadaret.php', 'RETIRO', 'Retiro', 'insolvente');
            generateForm('solicitada.php', 'OTROS', 'Otros motivos', 'insolvente');

            echo "<br>";
          }
          /* liberar el conjunto de resultados */
          $resultado->close();
        }
        ?>
        <?php
        $consulta = "SELECT  borrowers.title, borrowers.firstname, borrowers.surname, borrowers.othernames, borrowers.userid, items.barcode, biblio.title, biblio.author, biblioitems.itemtype, accountlines.amountoutstanding
                      FROM accountlines
                      inner join borrowers on (borrowers.borrowernumber = accountlines.borrowernumber)
                      inner join items on (items.itemnumber = accountlines.itemnumber)
                      inner join biblioitems on (biblioitems.biblioitemnumber = items.biblioitemnumber)
                      inner join biblio on (biblio.biblionumber=biblioitems.biblionumber)
                      WHERE accountlines.amountoutstanding >= 2 AND borrowers.userid = '$carnet'";

        if ($resultado = $mysqli->query($consulta)) {
          echo "<br>";
          echo "<p>Este es el detalle del libro o libros con los que haz tenido inconvenientes.</p>";
          echo "<table class='bordered'>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Codigo</th>";
          echo "<th>Titulo</th>";
          echo "<th>Autor</th>";
          echo "<th>Tipo</th>";
          echo "</tr>";
          echo "</thead>";
          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {

            echo "<tr>";
            echo "<td>$fila[5]</td>"; //codigo de barra
            echo "<td>$fila[6]</td>"; //titulo
            echo "<td>$fila[7]</td>"; //autor
            echo "<td>$fila[8]</td>"; //tipo de item
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
        <p>En caso de que hayas ingresado un n&uacute;mero de carnet equivocado, haz click en el bot&oacute;n <b>Regresar a inicio</b> y digita tus datos nuevamente.</p>
        <form class="form-signin col-md-12 text-center" method="POST" action="inicio.php">
          <input type="submit" name="submit" value="Regresar a inicio" class="custom-button" href="inicio.php" role="button">
        </form>
        <br>
        <br>
        <br>
      </div>

      <div class="col-md-4 text-center"><!-- seccion derecha -->
        <div class="rightsolvencia">
          <br>
          <h4>&iquest;Algún problema con tu solvencia? cont&aacute;ctanos.</h4>
          <p>Para nosotros es un placer atenderte. Por eso, te ofrecemos diferentes medios para responder a cada una de tus solicitudes de la manera que m&aacute;s te convenga.</p>

          <form style="text-align: center;" class="form-signin col-md-12" method="POST" action="https://bibliotecaunicaes.catolica.edu.sv/contactanos/">
            <input type="submit" name="submit" value="Formulario de ayuda" class="custom-button " href="https://bibliotecaunicaes.catolica.edu.sv/contactanos/" role="button">
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>