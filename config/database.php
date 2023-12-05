<?php
require 'config/constants.php';

//Conexion a base de datos.

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_errno($mysqli)) {
    die(mysqli_errno($mysqli));
}
