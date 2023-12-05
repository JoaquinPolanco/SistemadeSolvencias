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
        <div class="col-md-8"><!-- seccion izquierda -->
          <br>
          <h2>¿Tu información es correcta?</h2>
          <br>
          <h4>El número de carnet ingresado es el: <?php $carnet = $_GET['var1']; echo "<h3 style='text-transform: uppercase;'>$carnet</h3>"; ?></h4>
          <p>Si el número es correcto, significa que tu usuario no existe en nuestra base de datos, por lo que te recomendamos que te la Biblioteca haciendo click en el siguiente link: <a target="_blank" href="http://bibliotecaunicaes.catolica.edu.sv/?page_id=1261" style="color: blue;">Formulario de ayuda</a>.</p>
          <p>Si el número ingresado es incorrecto, regresa a la pagina de inicio y digita tu número de carnet nuevamente de forma correcta.</p>
          <br>

  <form style="text-align: center;" class="form-signin col-md-4" method="POST" action="inicio.php">
      <input type="submit" name="submit" value="Regresar a inicio" class="btn btn-default" href="inicio.php" role="button">
  </form>
<!--<?php $carnet = $_GET['var1']; echo "hola $carnet"; ?>-->

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
