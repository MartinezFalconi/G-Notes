<?php
require_once './connection.php';
$id = $_REQUEST["id"];

$sql0 = "DELETE FROM tblnotas WHERE idAlumnoFK = $id";
$result0 = mysqli_query($conexion,$sql0);

$sql = "DELETE FROM tblalumnos WHERE idAlumno = $id";
$result = mysqli_query($conexion,$sql);

header("location: ../view/zona.admin.php");