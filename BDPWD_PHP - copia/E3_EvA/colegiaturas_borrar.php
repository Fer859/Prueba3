<?php
$con = mysqli_connect("localhost","root","","colegio");
echo "<br><center>";

if (!$con) {
    die("No se establece la conexión con el servidor: ". mysqli_connect_error());
}

$sql = "DELETE FROM colegiaturas WHERE tipo_colegiatura = $_POST[tipo_colegiatura]";

if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
    die('Error: '.mysqli_error($con));
}

echo "Registro eliminado <br><br>";
echo "<a href="."colegiaturas_borrar.html".">Regresar</a>";
mysqli_close($con);
header('Location: colegiaturas_consulta.php');
exit;
?>