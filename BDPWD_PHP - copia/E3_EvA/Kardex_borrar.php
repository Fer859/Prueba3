<?php
$con = mysqli_connect("localhost","root","","colegio");
echo "<br><center>";

if (!$con) {
    die("No se establece la conexión con el servidor: ". mysqli_connect_error());
}

$sql = "DELETE FROM Kardex WHERE id_alumno = $_POST[id_alumno]";

if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)) {
    die('Error: '.mysqli_error($con));
}

echo "Registro eliminado <br><br>";
echo "<a href="."Kardex_borrar.html".">Regresar</a>";
mysqli_close($con);
header('Location: Kardex_consulta.php');
exit;
?>