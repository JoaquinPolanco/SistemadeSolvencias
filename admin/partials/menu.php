<?php
require '../partials/header.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Asegúrate de incluir los enlaces a los archivos CSS y JS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Agrega aquí tus otros elementos en el encabezado según sea necesario -->
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT_URL ?>index.php">
                <!-- Puedes reemplazar esto con el contenido de tu logo -->
                <img src="../images/logo-unicaes-hd.png" alt="Logo" class="logo">
            </a>
            <a class="navbar-brand" href="#">Sistema de Solvencias - Biblioteca Miguel de Cervantes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto"> <!-- Cambié ml-auto por ms-auto para alinear a la derecha -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>admin/solvencias_cervantes.php">Solvencias Santa Ana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>admin/solvencias_ilobasco.php">Solvencias Ilobasco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>admin/estadisticas.php">Estadisticas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>


</html>