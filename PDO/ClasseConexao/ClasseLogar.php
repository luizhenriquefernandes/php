<?php

Class ClasseLogar
{
 private $_idUsuario;
 private $_idLogin;
 private $_pass;
 
 
 
 //constructor
 public function __construct($idUsuario, $idLogin, $pass)
 {
   $this->_idUsuario = $idUsuario;
   $this->_idLogin = $idLogin;
   $this->_pass = $pass;
 }

 //getter and setter
 public function getIdUsuario()
 {
    return $this-> _idUsuario;
 }
 public function setIdUsuario($idUsuario)
 {
    $this->_idUsuario = $idUsuario;
 }
 public function getIdLogin()
 {
    return $this->_idLogin;
 }
 public function setIdLogin($idLogin)
 {
    $this->_idLogin = $idLogin;
 }
 public function getPass()
 {
    return $this->_pass;
 }
 public function setPass($pass)
 {
    $this->_pass=$pass;
 }
}
?>