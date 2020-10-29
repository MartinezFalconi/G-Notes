<?php

require_once './connection.php';

    $name = $_REQUEST["nombre"];
    $apellidoP = $_REQUEST["apellidoP"];
    $apellidoM = $_REQUEST["apellidM"];
    $grupo = $_REQUEST["grupo"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];

    // Prepare
    $sql = "INSERT INTO `tblalumnos`(`nombre`, `apellido0`, `apellido1`, `grupo`, `email`, `pass`) VALUES (?,?,?,?,?,md5(?))";
    $stmt = $pdo->prepare($sql);
    // Bind
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $apellidoP);
    $stmt->bindParam(3, $apellidoM);
    $stmt->bindParam(4, $grupo);
    $stmt->bindParam(5, $email);
    $stmt->bindParam(6, $pass);
    // Excecute
    $stmt->execute();
    $idAlu = $pdo->lastInsertId();
    $sql2 = "INSERT INTO `tblnotas`(`nomAsignatura`, `nota`, `idAlumnoFK`) VALUES ('Matemáticas',0,$idAlu)";
    $stmt = $pdo->prepare($sql2);
    $stmt->execute();

    $sql3 = "INSERT INTO `tblnotas`(`nomAsignatura`, `nota`, `idAlumnoFK`) VALUES ('Fisica',0,$idAlu)";
    $stmt = $pdo->prepare($sql3);
    $stmt->execute();

    $sql4 = "INSERT INTO `tblnotas`(`nomAsignatura`, `nota`, `idAlumnoFK`) VALUES ('Programación',0,$idAlu)";
    $stmt = $pdo->prepare($sql4);
    $stmt->execute();

header("location: ../view/zona.admin.php");


