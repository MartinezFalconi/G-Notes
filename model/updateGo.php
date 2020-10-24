<?php
require_once './connection.php';

    $id = $_REQUEST["id"];
    $name = $_REQUEST["nombre"];
    $apellidoP = $_REQUEST["apellidoP"];
    $apellidoM = $_REQUEST["apellidM"];
    $grupo = $_REQUEST["grupo"];
    $email = $_REQUEST["email"];

    $sql = "UPDATE `tblalumnos` SET `nombre`='{$name}',`apellido0`='{$apellidoP}',`apellido1`='{$apellidoM}',`grupo`='{$grupo}',`email`='{$email}' WHERE idAlumno = '{$id}'";
    $result = mysqli_query($conexion,$sql);

header("location: ../view/zona.admin.php");