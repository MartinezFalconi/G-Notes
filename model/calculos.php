<?php
require_once './connection.php';

require_once '../controller/sessionController.php';

/*MEDIAS DE ASIGNATURA + MEDIA MAS ALTA*/

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

/*Alumnos con la nota mas alta*/

$sql3 = "SELECT nombre, nota, nomAsignatura
FROM tblnotas
INNER JOIN tblalumnos
ON tblnotas.idAlumnoFK = tblalumnos.idAlumno
WHERE nomAsignatura = 'Matemáticas'
ORDER BY nota DESC LIMIT 1";
$result3 = mysqli_query($conexion,$sql3);

$sql4 = "SELECT nombre, nota, nomAsignatura
FROM tblnotas
INNER JOIN tblalumnos
ON tblnotas.idAlumnoFK = tblalumnos.idAlumno
WHERE nomAsignatura = 'Fisica'
ORDER BY nota DESC LIMIT 1";
$result4 = mysqli_query($conexion,$sql4);

$sql5 = "SELECT nombre, nota, nomAsignatura
FROM tblnotas
INNER JOIN tblalumnos
ON tblnotas.idAlumnoFK = tblalumnos.idAlumno
WHERE nomAsignatura = 'Programación'
ORDER BY nota DESC LIMIT 1";
$result5 = mysqli_query($conexion,$sql5);

    echo "<table>";
        echo "<tr>";
        echo "<th>Alumno</th>";
        echo "<th>Nota</th>";
        echo "<th>Materia</th>";
        echo "</tr>";
        foreach ($result3 as $result3) {
            echo "<td>{$result3['nombre']}</td>";
            echo "<td>{$result3['nota']}</td>";
            echo "<td>{$result3['nomAsignatura']}</td>";
        }
        foreach ($result4 as $result4) {
            echo "<tr>";
            echo "<td>{$result4['nombre']}</td>";
            echo "<td>{$result4['nota']}</td>";
            echo "<td>{$result4['nomAsignatura']}</td>";
        }
        foreach ($result5 as $result5) {
            echo "<tr>";
            echo "<td>{$result5['nombre']}</td>";
            echo "<td>{$result5['nota']}</td>";
            echo "<td>{$result5['nomAsignatura']}</td>";
        }
    echo "</table>";

    echo "<h4><a href='../view/zona.admin.php'>Volver</a></h4>";