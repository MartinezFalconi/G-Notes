<!DOCTYPE html>
<html lang="en">
<head>
<title>Notas | Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
require_once '../controller/sessionController.php';
?>
    <h1>Zona admin</h1>

    <div class="filtro">
        <div class="form-group">
            <form action="./zona.admin.php" id="filtro" method="POST">
                <label for="Nombre">Nombre:</label>
                <input class="form-control" type="text" id="nombre" name="nombre"><br>
                <label for="ApellidoP">Apellido paterno:</label>
                <input class="form-control" type="text" id="apellidoP" name="apellidoP"><br>
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Filtrar">
            </form>
        </div>
    </div>

    <h2><a href='../model/calculos.php'>Datos de interés</a></h2>

    <?php
        require_once '../model/connection.php';
        if (isset($_POST['nombre'])) {
            $name = $_POST['nombre'];
            $apellido = $_POST['apellidoP'];
            $sql = "SELECT * FROM tblalumnos WHERE nombre LIKE '%$name%' AND apellido0 LIKE '%$apellido%'";
            $result = mysqli_query($conexion,$sql);
            echo "<table class='table'>";
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido P</th>";
                echo "<th>Apellido M</th>";
                echo "<th>Actualizar</th>";
                echo "<th>Borrar</th>"; 
                echo "<th><a href='../model/add.php'>Añadir alumno</a></th>";
                echo "</tr>";
                foreach ($result as $result) {
                    echo "<tr>";
                    echo "<td>{$result['nombre']}</td>";
                    echo "<td>{$result['apellido0']}</td>";
                    echo "<td>{$result['apellido1']}</td>";
                    echo "<td><a href='../model/update.php?id={$result['idAlumno']}'>Actualizar</a></td>";
                    echo "<td><a href='../model/delete.php?id={$result['idAlumno']}'>Eliminar</a></td>";
                }
            echo "</table>";
        }else{
            $sql = "SELECT * FROM tblalumnos";
            $result = mysqli_query($conexion,$sql);
            echo "<table class='table'>";
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido P</th>";
                echo "<th>Apellido M</th>";
                echo "<th>Actualizar</th>";
                echo "<th>Eliminar</th>"; 
                echo "<th><a href='../model/add.php'>Añadir alumno</a></th>";
                echo "</tr>";
                foreach ($result as $result) {
                    echo "<tr>";
                    echo "<td>{$result['nombre']}</td>";
                    echo "<td>{$result['apellido0']}</td>";
                    echo "<td>{$result['apellido1']}</td>";
                    echo "<td><a href='../model/update.php?id={$result['idAlumno']}'>Actualizar</a></td>";
                    echo "<td><a href='../model/delete.php?id={$result['idAlumno']}'>Eliminar</a></td>";
                }
            echo "</table>";
        }
    ?>



  
</body>
</html>
