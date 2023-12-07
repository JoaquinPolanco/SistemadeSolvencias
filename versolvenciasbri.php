ESTA PANTALLA SE TIENE QUE ELIMINAR Y PONER EL HREF DEL KOHA APUNTANDO A SOLVENCIAS BMC O ILOBASCO
YA QUE LA EL BOTON ONLINE YA NO EXISTE.

<?php
include('config/database.php');
include('partials/header.php');
?>

<body >
  <div class="container ">
    <div class="row">
      <div class="col-md-2"><!-- seccion izquierda --></div>
      <div class="col-md-8"><!-- seccion centro -->
        <br>
        <h2>¿Necesitas imprimir solvencias?</h2>
        <br>
        <p>La solvencia de biblioteca en un documento oficial, que hace constar que el alumno no tiene libros pendientes de entregar, sanciones por entregas tardías o cualquier otro asunto con la Biblioteca Regional de Ilobasco.</p>
        <p>Las solvencias pueden ser solicitadas en línea incluso por alumnos no solventes. Para ver las solicitudes de alumnos utiliza los siguienes botones:</p>
        <br>
        <div class="col-sm-4 col-md-4">
          <a href="solvenciaonlinebri.php"><button type="button" class="btn btn-info btn-lg btn-block">Solvencias Online</button></a>
          <br>
          <p>Muestra el listado de alumnos que solicitado la solvencia en línea para que se le imprima en Registro Académico.</p>
        </div>
        <div class="col-sm-4 col-md-4">
          <a href="solvencias_ilobasco.php"><button type="button" class="btn btn-success btn-lg btn-block">Solvencias por Correo</button></a>
          <br>
          <p>Muestra el listado de alumnos que solicitado la solvencia en línea y pidieron recibirla por correo para imprimirla ellos mismos.</p>
        </div>
      </div>
    </div>

    <div class="col-md-2"><!-- seccion derecha --></div>

  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>