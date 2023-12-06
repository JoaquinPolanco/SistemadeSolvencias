<?php
include('config/database.php');
$codsolicitadas = $_GET['var'];

/*
 * Esta es la forma OO "oficial" de hacerlo,
 * AUNQUE $connect_error estaba averiado hasta PHP 5.2.9 y 5.3.0.
 */
if ($link->connect_error) {
  die('Error de Conexión (' . $link->connect_errno . ') '
    . $link->connect_error);
}
/*
 * Use esto en lugar de $connect_error si necesita asegurarse
 * de la compatibilidad con versiones de PHP anteriores a 5.2.9 y 5.3.0.
*/
if (mysqli_connect_error()) {
  die('Error de Conexión (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}

echo "$codsolicitadas";
/* UPDATE*/

if ($update = mysqli_query($link, "UPDATE `solicitadas` SET `impreso`= 'SI' WHERE codsolicitadas = '$codsolicitadas'")) {
  $resultado = mysqli_num_rows($update);
}
if ($resultado >= 1) {
  echo "algo salio mal";
} else {
  if ($insert = mysqli_query($link, "INSERT INTO `historial`(`codsolicitadas`) VALUES ($codsolicitadas)")) {
    $result = mysqli_num_rows($insert);
  }
  if ($result >= 1) {
    echo "algo salio mal x2";
  }
  echo "<script language='javascript'>window.location='solvenciasregistroilobasco.php'</script>;";
}
