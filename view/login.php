<html>
<head>
<title>Inicia sesión | Gestión notas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/code.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="form-group">
        <form action="../controller/loginController.php" method="POST" onsubmit="return validaForm()">
            <p>
            Correo electrónico: <input class="form-control" type="email" name="email" id="email" ><br>
            Contraseña: <input class="form-control" type="password" name="pass" id="pass" ><br>
            <input class="btn btn-primary btn-lg" type="submit" value="Iniciar sesisón">
            </p>
        </form>
    </div>
</body>
</html>