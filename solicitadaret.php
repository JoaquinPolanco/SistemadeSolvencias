<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Social Buttons for Bootstrap" />
  <meta property="og:description" content="Social Sign-In Buttons made in pure CSS based on Bootstrap and Font Awesome!" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://lipis.github.io/bootstrap-social/" />
  <meta property="og:image" content="http://lipis.github.io/bootstrap-social/assets/img/bootstrap-social.png" />

  <link rel="icon" href="images/logo-unicaes-hd.png" type="image/png">
  <title>Solvencias Biblioteca</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo 'css/botones.css'; ?>">

</head>

<body style="background-color: #fff; text-align: center;">
  <div class="container">
    <div class="row">
      <div class="col-md-">
        <br>
        <h1><img src="images/logo-unicaes-hd.png" alt="Logo" style="max-width: 100px; height: auto;"> Biblioteca Miguel de Cervantes </h1>
        <h2>Solvencia para retiro de ciclo solicitada!</h2>
        <br>

        <?php
        include('config/database.php');

        $titulo = $_POST['titulo'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $carrera = $_POST['carrera'];
        $facultad = $_POST['facultad'];
        $carnet = $_POST['carnet'];
        $email = $_POST['email'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];

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

        mysqli_query($mysqli, "INSERT INTO `solicitadas`(`titulo`, `nombres`, `apellidos`, `carnet`, `email`, `carrera`, `facultad`, `estado`, `tiposolvencia`, `impreso`) VALUES ('$titulo','$nombre','$apellido','$carnet','$email','$carrera','$facultad','$estado','$tipo','')");

        echo "<h4><b>$titulo $nombre $apellido</b>, estudiante de la carrera de <b>$carrera</b>, con el n&uacute;mero de carnet: <b>$carnet</b>. Haz solicitado tu solvencia de forma exitosa.</h4>";
        echo "<br>";
        echo "<h3>Recuerda:</h3>";
        echo "<h4><li>La solvencia no tiene ning&uacute;n costo, es un servicio de la Universidad Católica de El Salvador para sus usuarios.</li></h4>";
        echo "<h4><li>La solvencia tiene 1 mes de vigencia. Si no la usas en el periodo de tiempo sugerido pierde su validez y deber&aacute;s tramitarla nuevamente.</li></h4>";
        ?>
        <br>
        <a href="index.php" class="custom-button ">Regresar a inicio</a>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>