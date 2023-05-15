<?php

class Usuario
{
    public function login($login, $pass)
    {
        global $pdo;
        $sql = "SELECT * FROM usuario WHERE email = :email AND pass = :pass";
        $sql = $pdo->prepare($sql);
        $sql -> bindValue("email",$login);
        $sql -> bindValue("pass",$pass);
        $sql -> execute();               
        if($sql->rowCount()>0)
        {
            
        }
   
    }
}
?>