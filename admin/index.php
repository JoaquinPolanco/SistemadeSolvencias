<?php
include('config/database.php');
include('partials/header.php');
include('partials/menu.php');
?>

<h1 class="text-center">Biblioteca Miguel de Cervantes</h1>
<h3 class="text-center">Sistema De Solvencias</h3>
<br>
<br>
<div class="cards-list">
    <a href="<?= ROOT_URL ?>index.php" class="card">
        <div class="card_image">
        <img src='../images/logo-unicaes-hd.png'>
        </div>
        <div class="card_content">
            <div class="card_title title-black">
                <p>Solicitar Solvencia</p>
            </div>
        </div>
    </a>

    <a href="<?= ROOT_URL ?>admin/solvencias_cervantes.php" class="card">
        <div class="card_image">
            <img src='../images/logo-unicaes-hd.png'>
        </div>
        <div class="card_content">
            <div class="card_title title-black">
                <p>Solvencias Santa Ana</p>
            </div>
        </div>
    </a>

    <a href="<?= ROOT_URL ?>admin/solvencias_ilobasco.php" class="card">
        <div class="card_image">
            <img src='../images/logo-unicaes-hd.png'>
        </div>
        <div class="card_content">
            <div class="card_title title-black">
                <p>Solvencias Ilobasco</p>
            </div>
        </div>
    </a>
    <a href="<?= ROOT_URL ?>admin/estadisticas.php" class="card">
        <div class="card_image">
            <img src='../images/logo-unicaes-hd.png'>
        </div>
        <div class="card_content">
            <div class="card_title title-black">
                <p>Estadisticas</p>
            </div>
        </div>
    </a>
</div>