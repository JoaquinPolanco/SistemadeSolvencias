<?php
$link = new mysqli('localhost', 'root', '', 'koha_catolica');

$carnet = $_POST['carnet'];
$email = $_POST['email'];

/*
http://www.catalogo.catolica.edu.sv/
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
/*la consulta*/

if ($consulta = mysqli_query($link, "SELECT borrowers.userid, borrowers.firstname, borrowers.surname, borrowers.othernames, items.barcode, biblio.title, biblio.author, biblioitems.itemtype, accountlines.amountoutstanding
                                      FROM accountlines
                                      inner join borrowers on (borrowers.borrowernumber = accountlines.borrowernumber)
                                      inner join items on (items.itemnumber = accountlines.itemnumber)
                                      inner join biblioitems on (biblioitems.biblioitemnumber = items.biblioitemnumber)
                                      inner join biblio on (biblio.biblionumber=biblioitems.biblionumber)
                                      WHERE accountlines.amountoutstanding >= 2 AND borrowers.userid = '$carnet'")) {
    /* determinar si el carnet tiene mora*/
    $resultado = mysqli_num_rows($consulta);
    }

  if ($resultado>= 1) {
      echo "<script language='javascript'>window.location='insolvente.php?var1=$carnet&var2=$email'</script>;";
    } else {

$consulta1 = mysqli_query($link, "SELECT * FROM borrowers WHERE userid = '$carnet'");
$resultado1 = mysqli_num_rows($consulta1);

        if ($resultado1>=1) {
          echo "<script language='javascript'>window.location='solvente.php?var1=$carnet&var2=$email'</script>;";
        }
        else {
          echo "<script language='javascript'>window.location='noexiste.php?var1=$carnet'</script>;";
        }
      }

/*echo"<script language='javascript'>window.location='solvente.php?var1=$carnet'</script>;";*/


?>
