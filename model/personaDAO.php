<?php
//DAO=DATA ACCES OBJECT
require_once 'persona.php';
class PersonaDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($persona){
        $query = "SELECT * FROM tbladministrador WHERE email=? AND pass=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$persona->getEmail();
        $pass=$persona->getPass();
        //bindParam rellena por orden los interrogantes de la query
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$pass);
        $sentencia->execute();
        $numRow=$sentencia->rowCount();
        if($numRow==1){
            session_start();
            $_SESSION['persona']=$persona;
            return true;
        }else {
            return false;
        }
    }
}

?>