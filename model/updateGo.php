<?php
require_once './connection.php';

    $id = $_REQUEST["id"];
    $name = $_REQUEST["nombre"];
    $apellidoP = $_REQUEST["apellidoP"];
    $apellidoM = $_REQUEST["apellidM"];
    $grupo = $_REQUEST["grupo"];
    $email = $_REQUEST["email"];

    $nota1 = $_REQUEST["1"];
    $nota2 = $_REQUEST["2"];
    $nota3 = $_REQUEST["3"];
    $idnotas1 = $_REQUEST["nota1"];
    $idnotas2 = $_REQUEST["nota2"];
    $idnotas3 = $_REQUEST["nota3"];

    $sql = "UPDATE `tblalumnos` SET `nombre`='{$name}',`apellido0`='{$apellidoP}',`apellido1`='{$apellidoM}',`grupo`='{$grupo}',`email`='{$email}' WHERE idAlumno = '{$id}'";
    $result = mysqli_query($conexion,$sql);

    $sql2 = "UPDATE `tblnotas` SET `nota`= $nota1 WHERE idNotas = $idnotas1";
    $result2 = mysqli_query($conexion,$sql2);
    echo $sql2;

    $sql3 = "UPDATE `tblnotas` SET `nota`= $nota2 WHERE idNotas = $idnotas2";
    $result3 = mysqli_query($conexion,$sql3);

    $sql4 = "UPDATE `tblnotas` SET `nota`= $nota3 WHERE idNotas = $idnotas3";
    $result4 = mysqli_query($conexion,$sql4);

header("location: ../view/zona.admin.php");