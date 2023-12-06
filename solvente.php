<?php
include('config/database.php');
include('partials/header.php');
?>

<body style="background-color: #fff; ">

  <div class="container text-center">
    <div class="row">
      <div class="col-md-8"><!-- seccion izquierda -->
        <h1><img src="firmas/logo-unicaes-hd.png" alt="Logo" style="max-width: 100px; height: auto;"> Biblioteca Miguel de Cervantes </h1>
        <h2 class="text-center">¿Tu información es correcta?</h2>

        <h4>
          A continuación, se muestra un formulario con la información que aparecerá en tu solvencia. Léela con atención y, en caso de existir alguna inconsistencia, te invitamos a ponerte en contacto con la oficina técnica de la Biblioteca. Puedes hacerlo accediendo al siguiente enlace:
          <a target="_blank" href="https://bibliotecaunicaes.catolica.edu.sv/contactanos/" style="color: blue; text-decoration: none; font-weight: bold;">Contáctanos</a>.
        </h4>


        <?php
        $carnet = $_GET['var1'];
        $email = $_GET['var2'];

        $consulta = "SELECT title, firstname, surname, othernames, userid, initials FROM borrowers WHERE userid = '$carnet'";

        if ($resultado = $mysqli->query($consulta)) {

          /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {

            echo "<table>";
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

            echo "<tbody>";
            echo "<tr>";
            echo "<td>$fila[0]</td>"; // título
            echo "<td>$fila[1]</td>"; // nombre
            echo "<td>$fila[2]</td>"; // apellido
            echo "<td>$fila[3]</td>"; // carrera
            echo "<td>$fila[4]</td>"; // carnet
            echo "<td>$email</td>";    // email
            echo "</tr>";
            echo "</tbody>";

            echo "</table>";
            echo "<br>";
            echo "<p>Si la información es correcta y corresponde a tu número de carnet, haz click en el <b>Motivo</b> para el que necesitas tu solvencia y puedes pasar por tu solvencia de biblioteca a la oficina técnica en la fecha indicada:</p>";

            $hiddenFields = [
              'titulo' => $fila[0],
              'nombre' => $fila[1],
              'apellido' => $fila[2],
              'carrera' => $fila[3],
              'carnet' => $fila[4],
              'facultad' => $fila[5],
              'email' => $email,
              'estado' => 'solvente',
            ];

            // Función para generar un formulario con botón
            function generateForm($action, $tipo, $label)
            {
              global $hiddenFields;

              echo "<form class='form-signin col-md-3' method='POST' action='$action'>";
              foreach ($hiddenFields as $name => $value) {
                echo "<input type='hidden' name='$name' value='$value'>";
              }
              echo "<input type='hidden' name='tipo' value='$tipo'>";
              echo "<input type='submit' name='submit' value='$label' class='custom-button' role='button'>";
              echo "</form>";
            }

            // Generar formularios para cada tipo
            generateForm('solicitadagra.php', 'GRADUACIÓN', 'Graduación');
            generateForm('solicitadarei.php', 'REINGRESO', 'Reingreso');
            generateForm('solicitadaret.php', 'RETIRO', 'Retiro');
            generateForm('solicitada.php', 'OTROS', 'Otros motivos');

            echo "<br>";
          }

          /* liberar el conjunto de resultados */
          $resultado->close();
        }

        /* cerrar la conexi&oacute;n */
        $mysqli->close();

        ?>
        <br>
        <br>
        <p>En caso de que hayas ingresado un n&uacute;mero de carnet equivocado, haz click en el bot&oacute;n <b>Regresar a inicio</b> y digita tus datos nuevamente.</p>
        <form class="form-signin col-md-12 text-center" method="POST" action="index.php">
          <input type="submit" name="submit" value="Regresar a inicio" class="custom-button " href="index.php" role="button">
        </form>

      </div>
      <br>
      <div class="col-md-4 text-center"><!-- seccion derecha -->
        <div class="rightsolvencia">
          <br>
          <h4>&iquest;Algún problema con tu solvencia? cont&aacute;ctanos.</h4>
          <p>Para nosotros es un placer atenderte. Por eso, te ofrecemos diferentes medios para responder a cada una de tus solicitudes de la manera que m&aacute;s te convenga.</p>
          <ul style="list-style:none">
          </ul>
          <form style="text-align: center;" class="form-signin col-md-12" method="POST" action="https://bibliotecaunicaes.catolica.edu.sv/contactanos/">
            <input type="submit" name="submit" value="Formulario de ayuda" class="custom-button" href="https://bibliotecaunicaes.catolica.edu.sv/contactanos/" role="button">
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>