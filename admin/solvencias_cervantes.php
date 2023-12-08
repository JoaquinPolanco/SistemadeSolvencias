<!-- ESTA PANTALLA SE TIENE QUE ELIMINAR Y PONER EL HREF DEL KOHA APUNTANDO A SOLVENCIAS BMC O ILOBASCO
YA QUE LA EL BOTON ONLINE YA NO EXISTE. -->

<?php
include('config/database.php');
include('partials/header.php');
include('partials/menu.php')
?>

<div class="container">

  <div class="col-md-12 text-center"><!-- seccion centro -->
    <h1 style="text-align: center;">Solvencias solicitadas Santa Ana</h1>
    <br>
    <p>Buscar por Carnet, Nombre, Apellido o Carrera:</p>
    <form class="form-signin  col-md-10" method="POST" action="solvencias_cervantes.php">
      <div class="col-md-4">
        <input type="text" name="buscar" class="form-control" placeholder="Buscar">
      </div>
      <div class="col-md-2">
        <input type="submit" name="submit" value="Buscar" class="btn btn-success" role="button">
      </div>
    </form>

    <?php

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
    $consulta = "SELECT carnet, nombres, apellidos, carrera, fechasolicitud, tiposolvencia, codsolicitadas, estado, email FROM `solicitadas`
                        WHERE email != '' AND
                        impreso = '' AND
                        facultad != '$ilobasco'
                        AND (carnet LIKE '%$buscar%' OR nombres LIKE '%$buscar%' OR apellidos LIKE '%$buscar%' OR carrera LIKE '%$buscar%')
                        ORDER BY fechasolicitud DESC";
    //$consulta = "SELECT carnet, nombres, apellidos, carrera, fechasolicitud, tiposolvencia, codsolicitadas, estado, email FROM `solicitadas` WHERE email != '' AND impreso = '' AND facultad != '$ilobasco' ORDER BY fechasolicitud DESC";

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
      echo "<th>E-mail</th>";
      echo "<th>PDF</th>";
      echo "</tr>";
      echo "</thead>";
      /* obtener el array de objetos */
      while ($fila = $resultado->fetch_row()) {

        echo "<tr>";
        echo "<td>$fila[0]</td>"; //carnet
        echo "<td>$fila[1]</td>"; //nombre
        echo "<td>$fila[2]</td>"; //apellido
        echo "<td>$fila[3]</td>"; //carera
        echo "<td>$fila[4]</td>"; //fecha
        echo "<td>$fila[5]</td>"; //motivo
        echo "<td>$fila[7]</td>"; //estado
        echo "<td>$fila[8]</td>"; //email
        echo "<td><a href='imprimircorreo.php?var=$fila[6]'><button type='button' class='custom-button'>Imprimir</button></a></td>"; //autor

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
</div>
</div>
<script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>