<?php 
/**Conta.php será a classe de uma conta bancária de um clie*/
class Conta{
//fazendo o setter e o getter
    protected $_nome;
    protected $_saldo;
    protected $_saque;
    //fazendo o método sacar
    function sacar10(){
        $saque = $this->getSaldo() - $this->getSaque()-10;
        print("O valor sacado foi {$saque}<br>");
    }

    //fazendo o constructor
    function __construct($nome, $saldo){
        $this->_nome = $nome;
        $this->_saldo = $saldo;
    }

    //fazendo o getter e o setter
    function getSaque(){
        return $this->_saque;
    }
    function getNome(){
        return $this->_nome;
    }
    function setNome($nome){
        $this->_nome=$nome;
    }
    function setSaque($saque){
        $this->_saque=$saque;
    }    
    function getSaldo(){
        return $this->_saldo;
    }
    function setSaldo($saldo){
        $this->_saldo=$saldo;
    }


}
?>




