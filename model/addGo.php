<?php

require_once './connection.php';

    $name = $_REQUEST["nombre"];
    $apellidoP = $_REQUEST["apellidoP"];
    $apellidoM = $_REQUEST["apellidM"];
    $grupo = $_REQUEST["grupo"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];

    $sql = "INSERT INTO `tblalumnos`(`nombre`, `apellido0`, `apellido1`, `grupo`, `email`, `pass`) VALUES ('{$name}','{$apellidoP}','{$apellidoM}','{$grupo}','{$email}',MD5('{$pass}'))";
    $result = mysqli_query($conexion,$sql);

header("location: ../view/zona.admin.php");


