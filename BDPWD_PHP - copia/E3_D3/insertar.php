<?php
$con = mysqli_connect("localhost","root","","Enterprise");
if (!$con) {
    die("No se estableció la conexión con el servidor: ". mysqli_connect_error());
}

$sql = "INSERT INTO clientes VALUES(
    '$_POST[id_cliente]',
    '$_POST[nom_cliente]',
    '$_POST[apellido_cliente]',
    '$_POST[dir_cliente]',
    '$_POST[edad_cliente]',
    '$_POST[pedido]'
    )";

if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
    die('Error: '.mysqli_error($con));
}

echo "<center>";
echo "1 registro agregado <br>";
echo "<a href="."consulta.php".">Regresar</a>";
echo "</center>";
mysqli_close($con);
header('Location: consulta.php');
exit;
?>