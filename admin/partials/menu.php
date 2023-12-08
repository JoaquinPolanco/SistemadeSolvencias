<?php
require '../partials/header.php';
?>

<body>
    <div class="menu">
        <div class="logo-container">
            <!-- Puedes reemplazar la ruta del logo con la ruta de tu propio logo -->
            <a href="index.php" class="logo-link"><img src="../images/logo-unicaes-hd.png" alt="Logo" class="logo"></a>
        </div>
        <a href="index.php" class="custom-button">Inicio</a>
        <a href="<?= ROOT_URL ?>admin/versolvenciasbmc.php" class="custom-button">Solvencias Santa Ana</a>
        <a href="<?= ROOT_URL ?>admin/versolvenciasbri.php" class="custom-button">Solvencias Ilobasco</a>
        <a href="<?= ROOT_URL ?>admin/estadisticas.php" class="custom-button">Estadisticas</a>
    </div>
</body>