<?php
require_once './connection.php';

$sql0 = "SELECT AVG(nota) FROM tblnotas WHERE nomAsignatura = 'Matemáticas'";
$result0 = mysqli_query($conexion,$sql0);

$MEDmats = $result0->fetch_array()[0] ?? '';

echo "La media de matemáticas es: ".$MEDmats;
echo "<br>";

$sql1 = "SELECT AVG(nota) FROM tblnotas WHERE nomAsignatura = 'Fisica'";
$result1 = mysqli_query($conexion,$sql1);

$MEDfisica = $result1->fetch_array()[0] ?? '';
echo "La media de fisica es: ".$MEDfisica;
echo "<br>";

$sql2 = "SELECT AVG(nota) FROM tblnotas WHERE nomAsignatura = 'Programación'";
$result2 = mysqli_query($conexion,$sql2);

$MEDprogramacion = $result2->fetch_array()[0] ?? '';
echo "La media de programación es: ".$MEDprogramacion;
echo "<br>";

$TOPMEDIA = max($MEDfisica,$MEDmats,$MEDprogramacion);
echo "La media mas grande es: ".$TOPMEDIA;

