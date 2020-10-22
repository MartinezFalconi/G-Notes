<?php
session_start();
//mata la sesion iniciada
session_destroy();
header('Location:../index.php');
?>