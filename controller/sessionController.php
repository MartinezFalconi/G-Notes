<?php
require_once '../model/persona.php';
session_start();
if (!isset($_SESSION['persona'])) {
    header('Location:../index.php');
}
echo '<div class="logo"><h1>Bienvenido '.$_SESSION['persona']->getEmail().'</h1><h1 style="float: right;"><a href="../controller/logoutController.php">Logout</a></h1></div>';