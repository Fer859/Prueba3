<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body><center>
    <?php
    $con = mysqli_connect("localhost","root","","colegio");
    $resultado = mysqli_query($con, "SELECT * FROM Kardex");

    echo "<font face=arial>";
    echo "<a href='Kardex_consulta.php'>Actualizar</a><br>";
    echo "<h1>Consultar Tabla</h1>";
    echo "<table border=1>
    <tr>
        <td>ID del alumno</td>
        <td>Primera materia</td>
        <td>Segunda materia</td>
        <td>Tercera materia</td>
    </tr>";
    while($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td align=center>".$row['id_alumno']."</td>";
        echo "<td align=center>".$row['materia_1']."</td>";
        echo "<td align=center>".$row['materia_2']."</td>";
        echo "<td align=center>".$row['materia_3']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    $registro = mysqli_num_rows($resultado);
    echo "<br>Registros:". $registro;
    mysqli_close($con);
    ?>
</center></body>
</html>