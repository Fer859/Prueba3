<?php
    $con = mysqli_connect("localhost","root","","colegio");
    if (!$con) {
        die("No se estableció la conexión con el servidor: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO maestros VALUES(
        '$_POST[nom_maestro]',
        '$_POST[edad_maestro]',
        '$_POST[materia]',
        '$_POST[turno]'
        )";

    if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
        die('Error: '.mysqli_error($con));
    }

    echo "<center>";
    echo "1 registro agregado <br>";
    echo "<a href="."maestros_consulta.php".">Regresar</a>";
    echo "</center>";
    mysqli_close($con);
    header('Location: maestros_consulta.php');
    exit;
    ?>