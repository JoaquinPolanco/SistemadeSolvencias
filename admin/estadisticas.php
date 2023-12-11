<?php
include('config/database.php');
include('partials/header.php');
include('partials/menu.php');
?>

<body style="background-color: #222; color: #fff;">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <br>
        <br>
        <h3 style="font-size: 28px; color: #fff;">Estadísticas del Sistema de Solvencias</h3>
        <br>
        <p></p>
        <br>
      </div>
    </div>

    <div class="row justify-content-center">
      
      <div class="col-md-4">
        <div class="card text-center bg-white text-dark">
          <div class="card-header bg-dark text-white">
            <h5 class="card-title">Estadísticas Anuales</h5>
          </div>
          <div class="card-body">
            <form class="form-signin" method="POST" action="estadisticas_anual.php">
              <p>Año a consultar:</p>
              <input type="text" name="year" maxlength="4" class="form-control" placeholder="Ej: 2023" required>
              <br>
              <input type="submit" name="submit" value="Ver ahora" class="btn btn-dark" role="button">
              <br><br>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center bg-white text-dark">
          <div class="card-header bg-dark text-white">
            <h5 class="card-title">Estadística en Rango de Tiempo</h5>
          </div>
          <div class="card-body">
            <form class="form-signin" method="POST" action="estadisticas_rango.php">
              <p>Desde: <input type="date" name="dateinicio" class="form-control" required></p>

              <p>Hasta: <input type="date" name="datefin" class="form-control" required></p>
              <input type="submit" name="submit" value="Ver ahora" class="btn btn-dark" role="button">
              <br>
            </form>
          </div>
        </div>
      </div>


      <div class="col-md-4">
      <div class="card text-center bg-white text-dark">
          <div class="card-header bg-dark text-white">
            <h5 class="card-title">Búsqueda Específica</h5>
          </div>
          <div class="card-body">
            <form class="form-signin" method="POST" action="estadisticas_individual.php">
              <p>Búsqueda por Nombre, Apellidos o Carnet:</p>
              <input type="text" name="buscar" class="form-control" placeholder="Ej: MARTÍNEZ" required>
              <br>
              <input type="submit" name="submit" value="Ver ahora" class="btn btn-dark" role="button">
              <br><br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>