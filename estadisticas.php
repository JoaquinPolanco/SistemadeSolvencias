<?php
include('config/database.php');
include('partials/header.php');
?>

<body style="background-color: #fff;">

  <div class="container">
    <div class="row">
      <div style="text-align: center;">
        <br>
        <h2>¿Que necesitas saber sobre las solvencias?</h2>
        <br>
        <p></p>
        <br>

        <div class="panel panel-danger col-md-3" style="text-align: center;">
          <br>
          <div class="panel-heading">
            <h3 class="panel-title">Consulta un período de tiempo</h3>
          </div>
          <div class="panel-body">
            <form class="form-signin" method="POST" action="http://www.catalogo.catolica.edu.sv/cgi-bin/koha/Solvencia/verestadisticas.php">
              <span id="reauth-email" class="reauth-email"></span>
              <p>Desde: <input type="date" name="dateinicio"></p>
              <br>
              <p>Hasta: <input type="date" name="datefin"></p>
              <br>
              <input type="submit" name="submit" value="Ver ahora" class="btn btn-default" role="button">
              <br>
            </form>
          </div>
        </div>

        <div class="col-md-1"></div>

        <div class="panel panel-primary col-md-3" style="text-align: center;">
          <br>
          <div class="panel-heading">
            <h3 class="panel-title">Consulta rápida por año</h3>
          </div>
          <div class="panel-body">
            <form class="form-signin" method="POST" action="estadisticaanual.php">
              <span id="reauth-email" class="reauth-email"></span>
              <p>Año a consultar:</p><br>
              <input type="text" name="year" maxlength="4">
              <br><br>
              <input type="submit" name="submit" value="Ver ahora" class="btn btn-default" role="button">
              <br><br>
            </form>
          </div>
        </div>

        <div class="col-md-1"></div>

        <div class="panel panel-success col-md-3" style="text-align: center;">
          <br>
          <div class="panel-heading">
            <h3 class="panel-title">¿Quiénes han solicitado?</h3>
          </div>
          <div class="panel-body">
            <form class="form-signin" method="POST" action="verconsulta.php">
              <span id="reauth-email" class="reauth-email"></span>
              <p>Búsqueda por nombre, apellidos o carnet:</p>
              <input type="text" name="buscar">
              <br>
              <br>
              <input type="submit" name="submit" value="Ver ahora" class="btn btn-default" role="button">
              <br><br>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>