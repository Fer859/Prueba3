<?php
    $con = mysqli_connect("localhost","root","","colegio");
    if (!$con) {
        die("No se estableció la conexión con el servidor: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO alumnos VALUES(
        '$_POST[id_alumno]',
        '$_POST[nom_alumno]',
        '$_POST[turno]',
        '$_POST[tipo_colegiatura]'
        )";

    if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
        die('Error: '.mysqli_error($con));
    }

    echo "<center>";
    echo "1 registro agregado <br>";
    echo "<a href="."alumnos_consulta.php".">Regresar</a>";
    echo "</center>";
    mysqli_close($con);
    header('Location: alumnos_consulta.php');
    exit;
    ?>