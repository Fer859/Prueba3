<?php
    $con = mysqli_connect("localhost","root","","colegio");
    if (!$con) {
        die("No se estableció la conexión con el servidor: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO colegiaturas VALUES(
        '$_POST[tipo_colegiatura]',
        '$_POST[precio_colegiatura]',
        '$_POST[paquete_libros]',
        '$_POST[infrestructura]'
        )";

    if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
        die('Error: '.mysqli_error($con));
    }

    echo "<center>";
    echo "1 registro agregado <br>";
    echo "<a href="."colegiaturas_consulta.php".">Regresar</a>";
    echo "</center>";
    mysqli_close($con);
    header('Location: colegiaturas_consulta.php');
    exit;
    ?>