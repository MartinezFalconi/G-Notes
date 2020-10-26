<html>
<head>
<title>Inicia sesión | Gestión notas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/code.js"></script>
</head>
<body>

    <form action="../controller/loginController.php" method="POST" onsubmit="return validaForm()">
        <p>
        Correo electrónico: <input type="email" name="email" id="email" ><br>
        Contraseña: <input type="password" name="pass" id="pass" ><br>
        <input type="submit" value="Iniciar sesisón">
        </p>
    </form>

</body>
</html>