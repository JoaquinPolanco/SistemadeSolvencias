<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .menu {
            background-color: #1E1E1E;
            /* Fondo gris oscuro */
            overflow: hidden;
            text-align: center;
            padding: 10px;
            /* Añadido para espaciado */
        }

        .logo-container {
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
            float: left;
        }

        .logo {
            /* Ajusta el tamaño del logo según tus necesidades */
            height: 60px;
            background-color: transparent;
        }

        .menu::after {
            content: 'Biblioteca Miguel de Cervantes';
            display: inline-block;
            color: #F6C03D;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            border-radius: 0 0 15px 0;
            background-color: #1E1E1E;
            /* Fondo gris oscuro */
            float: left;
        }

        .menu a {
            display: inline-block;
            color: #F6C03D;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 20px;
            margin: 5px;
            background-color: #9D2720;
            /* Fondo rojo oscuro */
            font-weight: bold;
        }

        .menu a:hover {
            background-color: #F6C03D;
            color: #9D2720;
            transition: 0.3s;
        }

        .menu a.logo-link {
            /* Estilo específico para el enlace que contiene el logo */
            background-color: transparent;
            border: none;
            padding: 0;
            margin: 0;
        }

        .custom-center {
            text-align: center;
            margin-top: 70px;
            /* Ajusta según sea necesario para evitar superposición con el menú */
        }
    </style>
</head>

<body>

    <div class="menu">
        <div class="logo-container">
            <!-- Puedes reemplazar la ruta del logo con la ruta de tu propio logo -->
            <a href="index.php" class="logo-link"><img src="images/logo-unicaes-hd.png" alt="Logo" class="logo"></a>
        </div>
        <a href="index.php" class="custom-button">Inicio</a>
        <a href="versolvenciasbmc.php" class="custom-button">Solvencias Santa Ana</a>
        <a href="#" class="custom-button">Acerca de</a>
        <a href="estadisticas.php" class="custom-button">Estadisticas</a>
    </div>

</body>

</html>