<?php
//DAO=DATA ACCES OBJECT
require_once 'administrador.php';
class AdminDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($admin){
        $query = "SELECT * FROM tbladministrador WHERE email=? AND pass=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$admin->getEmail();
        $pass=$admin->getPass();
        //bindParam rellena por orden los interrogantes de la query
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$pass);
        $sentencia->execute();
        $numRow=$sentencia->rowCount();
        if($numRow==1){
            $admin->setEmail($result['email']);
            $admin->setIdAdmin($result['idAdmin']);
            session_start();
            $_SESSION['admin']=$admin;
            return true;
        }else {
            return false;
        }
    }
}

?>