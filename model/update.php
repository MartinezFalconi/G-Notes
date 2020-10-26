<?php
require_once '../controller/sessionController.php';
require_once './connection.php';
$id = $_REQUEST["id"];
$sql = "SELECT * FROM tblalumnos WHERE idAlumno = $id";
$result = mysqli_query($conexion,$sql);
$nota = 0;

    if ($row = mysqli_fetch_array($result)) {
                            
        echo "<FORM METHOD = 'POST' ACTION= 'updateGo.php'>";
        echo "Nombre: <INPUT TYPE = 'TEXT' NAME = 'nombre' VALUE = '{$row["nombre"]}'><br>";
        echo "Apellido paterno: <INPUT TYPE = 'TEXT' NAME = 'apellidoP' VALUE = '{$row["apellido0"]}'><br>";
        echo "Apellido materno: <INPUT TYPE = 'TEXT' NAME = 'apellidM' VALUE = '{$row["apellido1"]}'><br>";
        echo "Grupo: <INPUT TYPE = 'TEXT' NAME = 'grupo' VALUE = '{$row["grupo"]}'><br>";
        echo "Email: <INPUT TYPE = 'TEXT' NAME = 'email' VALUE = '{$row["email"]}'><br>";
        echo "<INPUT TYPE = 'HIDDEN' NAME = 'id' VALUE = '{$id}'><br>";

        $sql2 = "SELECT * FROM tblnotas WHERE idAlumnoFK = $id";
        $result2 = mysqli_query($conexion,$sql2);
        
            while($row2 = mysqli_fetch_array($result2)){
                $nota = $nota+1;
                echo "Nota$nota: {$row2["nomAsignatura"]} <INPUT TYPE = 'TEXT' NAME = '$nota' VALUE = '{$row2["nota"]}'><br>";
                echo "<INPUT TYPE = 'HIDDEN' NAME = 'nota$nota' VALUE = '{$row2["idNotas"]}'>";
            }


        echo "<INPUT TYPE = 'SUBMIT' NAME = 'actualizar' VALUE = 'Actualizar'><br>";
    }

echo "<h4><a href='../view/zona.admin.php'>Volver</a></h4>";




