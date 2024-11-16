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
    $resultado = mysqli_query($con, "SELECT * FROM colegiaturas");

    echo "<font face=arial>";
    echo "<a href='colegaturas_consulta.php'>Actualizar</a><br>";
    echo "<h1>Consultar Tabla</h1>";
    echo "<table border=1>
    <tr>
        <td>tipo de colegiatura</td>
        <td>precio</td>
        <td>Paquete de libros</td>
        <td>Infrestructura</td>
    </tr>";
    while($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td align=center>".$row['tipo_colegiatura']."</td>";
        echo "<td align=center>".$row['precio']."</td>";
        echo "<td align=center>".$row['paquete_libros']."</td>";
        echo "<td align=center>".$row['infraestructura']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    $registro = mysqli_num_rows($resultado);
    echo "<br>Registros:". $registro;
    mysqli_close($con);
    ?>
</center></body>
</html>