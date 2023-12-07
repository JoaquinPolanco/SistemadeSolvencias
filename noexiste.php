<?php
include('config/database.php');
include('partials/header.php');
?>


<body style="background-color: #fff;">

  <div class="container">
    <div class="row">
      <div class="col-md-8"><!-- seccion izquierda -->
        <br>
        <h2>¿Tu información es correcta?</h2>
        <br>
        <h4>El número de carnet ingresado es el: <?php $carnet = $_GET['var1'];
                                                  echo "<h3 style='text-transform: uppercase;'>$carnet</h3>"; ?></h4>
        <p>Si el número es correcto, significa que tu usuario no existe en nuestra base de datos, por lo que te recomendamos que te la Biblioteca haciendo click en el siguiente link: <a target="_blank" href="http://bibliotecaunicaes.catolica.edu.sv/?page_id=1261" style="color: blue;">Formulario de ayuda</a>.</p>
        <p>Si el número ingresado es incorrecto, regresa a la pagina de inicio y digita tu número de carnet nuevamente de forma correcta.</p>
        <br>

        <form style="text-align: center;" class="form-signin col-md-4" method="POST" action="index.php">
          <input type="submit" name="submit" value="Regresar a inicio" class="btn btn-default" href="index.php" role="button">
        </form>
        <!--<?php $carnet = $_GET['var1'];
            echo "hola $carnet"; ?>-->

      </div>





      <div class="col-md-4"><!-- seccion derecha -->
        <div class="rightsolvencia">
          <br>
          <h4>¿Algún problema con tu solvencia? contáctanos.</h4>
          <p>Para nosotros es un placer atenderte. Por eso, te ofrecemos diferentes medios para responder a cada una de tus solicitudes de la manera que más te convenga.</p>
          <ul style="list-style:none; a:link {text-decoration:none;}">
            <!--
              <li><span class="glyphicon glyphicon-home"></span>  By pass a Metapán y carr. antigua a San Salvador, Santa Ana,SV</li>
              <li><span class="glyphicon glyphicon-phone-alt"></span> (503) 2484-0634</li>
              <li><span class="glyphicon glyphicon-envelope"></span>  biblio@catolica.edu.sv</li>
              -->
          </ul>
          <form style="text-align: center;" class="form-signin col-md-4" method="POST" action="http://bibliotecaunicaes.catolica.edu.sv/?page_id=1261">
            <input type="submit" name="submit" value="Formulario de ayuda" class="btn btn-primary" href="http://bibliotecaunicaes.catolica.edu.sv/?page_id=1261" role="button">
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>