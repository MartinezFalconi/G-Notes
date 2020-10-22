<?php
require_once 'user.php';
class UserDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM users WHERE Email=? AND Pass=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$user->getEmail();
        $psswd=$user->getPass();
        //bindParam rellena por orden los interrogantes de la query
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$pass);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1){
            $user->setName($result['Name']);
            $user->setId_user($result['Id']);
            session_start();
            $_SESSION['user']=$user;
            return true;
        }else {
            return false;
        }
    }
}

?>

