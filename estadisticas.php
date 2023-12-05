<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
              <form class="form-signin" method="POST" action="http://www.catalogo.catolica.edu.sv/cgi-bin/koha/Solvencia/estadisticaanual.php">
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
              <form class="form-signin" method="POST" action="http://www.catalogo.catolica.edu.sv/cgi-bin/koha/Solvencia/verconsulta.php">
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
