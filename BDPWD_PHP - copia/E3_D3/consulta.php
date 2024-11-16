<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body><center>
    <?php
    $con = mysqli_connect("localhost","root","","Enterprise");
    $resultado = mysqli_query($con, "SELECT * FROM clientes");

    echo "<font face=arial>";
    echo "<a href='Consulta.php'>Actualizar</a><br>";
    echo "<h1>Consultar Tabla</h1>";
    echo "<table border=1>
    <tr>
        <td>Identificación</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Dirección</td>
        <td>Edad</td>
        <td>Pedido</td>
    </tr>";
    while($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td align=center>".$row['id_cliente']."</td>";
        echo "<td align=center>".$row['nom_cliente']."</td>";
        echo "<td align=center>".$row['apellido_cliente']."</td>";
        echo "<td align=center>".$row['dir_cliente']."</td>";
        echo "<td align=center>".$row['edad_cliente']."</td>";
        echo "<td align=center>".$row['pedido']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    $registro = mysqli_num_rows($resultado);
    echo "<br>Registros:". $registro;
    mysqli_close($con);
    ?>
</center></body>
</html>