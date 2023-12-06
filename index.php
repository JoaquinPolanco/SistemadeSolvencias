<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Social Buttons for Bootstrap" />
  <meta property="og:description" content="Social Sign-In Buttons made in pure CSS based on Bootstrap and Font Awesome!" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://lipis.github.io/bootstrap-social/" />
  <meta property="og:image" content="http://lipis.github.io/bootstrap-social/assets/img/bootstrap-social.png" />
  <link rel="icon" href="images/logo-unicaes-hd.png" type="image/png">
  <title>Solvencias Biblioteca</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo 'css/card.css'; ?>">
  <link rel="stylesheet" href="<?php echo 'css/botones.css'; ?>">
</head>

<body style="background-color: #fff; ">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <h1><img src="images/logo-unicaes-hd.png" alt="Logo" style="max-width: 100px; height: auto;"> Biblioteca Miguel de Cervantes </h1>
        <h2>¿Necesitas una solvencia?</h2>
        <h4>La solvencia de biblioteca es un documento oficial, que hace constar que el estudiante no tiene libros pendientes de entregar, sanciones por entregas tardías o cualquier otro asunto con la Biblioteca.</h4>
        <h4>Si deseas solicitar tu solvencia, necesitas llenar el siguiente formulario:</h4>
        <br>
        <br>
      </div>
    </div>
    <div class="row text-center">
      <form class="form-signin col-md-12 mx-auto" method="POST" action="ingreso.php">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 mx-auto">
              <div class="input__container">
                <label class="input__label"><i class="glyphicon glyphicon-credit-card"></i> Carnet</label>
                <input placeholder="Ingrese El Carnet" class="input text-center" name="carnet" type="text" required value="<?php echo isset($_POST['carnet']) ? $_POST['carnet'] : ''; ?>">
                <p><b>Ingrese su número de carnet sin guiones.</b></p>
                <br>
                <label class="input__label"><i class="glyphicon glyphicon-envelope"></i> Email</label>
                <input placeholder="Introduzca Su Email" class="input text-center" name="email" type="text" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                <p><b>Si desea recibir la solvencia digitalizada por correo, digite su correo electrónico.</b></p>
              </div>
            </div>
          </div>
          <br>
          <div class="col-md-12 custom-center">
            <input type="submit" name="submit" value="Solicitar ahora" class="custom-button" role="button">
          </div>
      </form>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>