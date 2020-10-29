<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</html>

<?php
require_once '../controller/sessionController.php';

    echo "<FORM METHOD = 'POST' ACTION= 'addGo.php'>";
    echo "Nombre: <INPUT TYPE = 'TEXT' NAME = 'nombre' VALUE = ''><br>";
    echo "Apellido paterno: <INPUT TYPE = 'TEXT' NAME = 'apellidoP' VALUE = ''><br>";
    echo "Apellido materno: <INPUT TYPE = 'TEXT' NAME = 'apellidM' VALUE = '']}'><br>";
    echo "Grupo: <INPUT TYPE = 'TEXT' NAME = 'grupo' VALUE = 'DAW'><br>";
    echo "Email: <INPUT TYPE = 'TEXT' NAME = 'email' VALUE = ''><br>";
    echo "Password: <INPUT TYPE = 'password' NAME = 'pass' VALUE = ''><br>";
    echo "<INPUT TYPE = 'SUBMIT'  class='btn btn-primary' NAME = 'añadir' VALUE = 'Añadir'><br>";

echo "<h4><a href='../view/zona.admin.php'>Volver</a></h4>";
?>