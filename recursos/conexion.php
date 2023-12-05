<?php
$mysqli = new mysqli('localhost', 'root', '', 'koha_catolica');

// Verificar la conexión
if ($mysqli->connect_error) {
    die('Error de conexión a la base de datos: ' . $mysqli->connect_error);
}
?>  