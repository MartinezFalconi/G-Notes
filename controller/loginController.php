<?php
require_once '../model/administrador.php';
require_once '../model/adminDAO.php';
if (isset($_POST['email'])) {
    //linea 6 rellena el construct de la clase administrador crea objeto
    $admin = new Administrador($_POST['email'], md5($_POST['pass']));
    //establece conexion con base de datos y ejecura la query, despues de comprobar la info en adminDAO.php
    $adminDAO = new AdminDAO();
    if($adminDAO->login($admin)){
        header('Location:../view/zona.admin.php');
    }else {
        header('Location:../view/login.php');
    }
}else {
    header('Location:../view/login.php');
}