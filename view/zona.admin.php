<!DOCTYPE html>
<html lang="en">
<head>
<title>Re-Read | Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>

<?php
require_once '../controller/sessionController.php';
?>

<div class="row">
  <div class="column middle">
    <div class="topnav">
      <a class="active">Libros</a>
    </div>
    <div class="textpage">
      <!--Ver todos los libros-->      
      <?php
      // require_once '../controller/librosController.php';
      ?>
    </div>
  </div>
  
  <div class="column side">
    <h2>Añadir libros</h2>
    <div class="form">
      <form action="ebooks.php" method="POST">
        <label for="title">Título</label>
        <input type="text" id="title" name="title" placeholder="Introduce el título...">
        <label for="img">Imagen</label>
        <input type="file" id="img" name="img" placeholder="Escoge una imagen...">
        <label for="description">Descripción</label>
        <textarea type="text" id="description" name="description" placeholder="Introduce la descripción..."></textarea>
        <label for="author">Autor</label>
        <select id="author" name="author">
            <option value="%">---</option>
            <?php
            // Valores del campo select
            // require_once '../controller/autoresController.php';
            ?>
        </select>
        <label for="country">País</label>
        <select id="country" name="country">
            <option value="%">---</option>
            <?php
            // Valores del campo select
            // require_once '../controller/paisesController.php';
            ?>
        </select>
        <!--checkbox-->
        <div class="two-column">
          <label for="top">¿És top ventas?</label>
          <input type="checkbox" id="top" name="top">
        </div>
        <div class="two-column">
          <label for="ebook">¿Está en formato eBook?</label>
          <input type="checkbox" id="ebook" name="ebook">
        </div>
        <!---->
        <input type="submit" value="Insertar">
      </form>
    </div>
  </div>
</div>
  
</body>
</html>
