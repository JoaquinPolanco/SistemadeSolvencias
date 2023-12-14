<?php
require_once('config/database.php');
require_once('../vendor/autoload.php');

if (isset($_GET['var'])) {
    $codsolicitadas = $_GET['var'];

    // Realiza una consulta para obtener la información de la solicitud
    $consulta = "SELECT carnet, nombres, apellidos, carrera, fechasolicitud, tiposolvencia, estado, email FROM `solicitadas` WHERE codsolicitadas = '$codsolicitadas'";

    if ($resultado = $mysqli->query($consulta)) {
        $fila = $resultado->fetch_assoc();

        // Configura la zona horaria
        date_default_timezone_set('America/El_Salvador');

        // Obtén la fecha actual en español
        $dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $fecha = $dias[date('w')] . ' ' . date('d') . ' de ' . $meses[date('n') - 1] . ' del ' . date('Y');

        // Crear instancia de TCPDF
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        // Configuración adicional para el formato del PDF
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Solvencia PDF');
        $pdf->SetSubject('Solvencia');
        $pdf->SetKeywords('Solvencia, PDF, TCPDF');

        // Agregar una página
        $pdf->AddPage();

        // Configurar fuente
        $pdf->SetFont('helvetica', '', 12);

        // Agregar contenido al PDF
        $pdf->writeHTML('
            <table width="100%">
                <tr>
                    <td style="text-align: left;">
                    <p><b>UNIVERSIDAD CATÓLICA DE EL SALVADOR</b></p>
                    <h4 style="text-align: left;" class="bold">Biblioteca Miguel de Cervantes</h4>
                    </td>
                    <td style="text-align: right;">
                        <img src="../images/logo-unicaes-hd.png" width="80px" height="80px">
                    </td>
                </tr>
            </table>
            <p class="underline">________________________________________________________________________________</p>
            <h3 style="text-align: center;" class="underline">SOLVENCIA</h3>
            <br>
            <p>Por medio de la presente se hace constar que:</p>
            <br>
            <h4 class="bold">' . $fila['nombres'] . ' ' . $fila['apellidos'] . '</h4>
            <p>con el carnet de estudiante:&nbsp;<strong>' . $fila['carnet'] . '</strong></p>
            <p>y de la carrera: <strong>' . $fila['carrera'] . '</strong></p>
            <p>está solvente con la Biblioteca de esta Universidad, hasta la presente fecha.</p>
            <p class="left-align">Santa Ana, ' . $fecha . '.</p>
            <br><br><br><br>
            <br>
            <p align="center">
                <img src="../images/FirmaCelina.png" width="80px" height="80px">
                <img src="../images/SelloBMC.png" width="80px" height="80px">
            </p>
            <br>
            <p style="text-align: center;" class="bold"><b>Msc. Celina del Rosario Baires</b></p>
            <p style="text-align: center;" class="bold"><b>Directora de la Biblioteca Miguel de Cervantes</b></p>
        ');

        // Guardar el PDF en el servidor
        $filename = 'solvencia_tcpdf.pdf';
        $pdf->Output($filename, 'D');

        // Insertar el código en la tabla 'historial'
        $insertQuery = "INSERT INTO `historial` (`codsolicitadas`) VALUES ('$codsolicitadas')";
        $insertResult = mysqli_query($mysqli, $insertQuery);

        // Verificar si la inserción en la tabla 'historial' fue exitosa
        if (!$insertResult) {
            echo "Error al insertar en la tabla de historial: " . mysqli_error($mysqli);
        }

        // Actualizar el campo 'impreso' a 'SI' en la tabla 'solicitadas'
        $updateQuery = "UPDATE `solicitadas` SET `impreso` = 'SI' WHERE codsolicitadas = '$codsolicitadas'";
        $updateResult = mysqli_query($mysqli, $updateQuery);

        // Verificar si la actualización fue exitosa
        if (!$updateResult) {
            echo "Error al actualizar el campo 'impreso': " . mysqli_error($mysqli);
        }
        echo '<script>window.location.href = "solvencias_cervantes.php";</script>';

        exit;

    }
}

$mysqli->close();
?>
