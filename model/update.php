<?php
require_once './connection.php';
$id = $_REQUEST["id"];
$sql = "SELECT * FROM tblalumnos WHERE idAlumno = $id";
$result = mysqli_query($conexion,$sql);

    if ($row = mysqli_fetch_array($result)) {
                            
        echo "<FORM METHOD = 'POST' ACTION= 'updateGo.php'>";
        echo "Nombre: <INPUT TYPE = 'TEXT' NAME = 'nombre' VALUE = '{$row["nombre"]}'><br>";
        echo "Apellido paterno: <INPUT TYPE = 'TEXT' NAME = 'apellidoP' VALUE = '{$row["apellido0"]}'><br>";
        echo "Apellido materno: <INPUT TYPE = 'TEXT' NAME = 'apellidM' VALUE = '{$row["apellido1"]}'><br>";
        echo "Grupo: <INPUT TYPE = 'TEXT' NAME = 'grupo' VALUE = '{$row["grupo"]}'><br>";
        echo "Email: <INPUT TYPE = 'TEXT' NAME = 'email' VALUE = '{$row["email"]}'><br>";
        echo "<INPUT TYPE = 'HIDDEN' NAME = 'id' VALUE = '{$id}'><br>";
        echo "<INPUT TYPE = 'SUBMIT' NAME = 'actualizar' VALUE = 'Actualizar'><br>";

    }




