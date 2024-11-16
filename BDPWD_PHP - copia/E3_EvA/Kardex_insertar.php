<?php
    $con = mysqli_connect("localhost","root","","colegio");
    if (!$con) {
        die("No se estableció la conexión con el servidor: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO Kardex VALUES(
        '$_POST[id_alumno]',
        '$_POST[materia_1]',
        '$_POST[materia_2]',
        '$_POST[materia_3]'
        )";

    if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
        die('Error: '.mysqli_error($con));
    }

    echo "<center>";
    echo "1 registro agregado <br>";
    echo "<a href="."Kardex_consulta.php".">Regresar</a>";
    echo "</center>";
    mysqli_close($con);
    header('Location: Kardex_consulta.php');
    exit;
    ?>