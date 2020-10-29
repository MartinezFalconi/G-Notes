<?php
require_once '../model/administrador.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:../index.php');
}
echo '<div class="logo"><h2>Bienvenido '.$_SESSION['admin']->getEmail().'</h2><h2 style="float: right;"><a href="../controller/logoutController.php">Logout</a></h2></div>';