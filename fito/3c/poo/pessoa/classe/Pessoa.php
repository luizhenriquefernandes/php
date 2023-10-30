<?php 
    class Pessoa{
        private $_nome;
        private $_idade;
        //método especial
        function apresentar(){
            print("Olá Sr.{$this->getNome()} você tem {$this->getIdade()}");
        }
        //métodos acessores e métodos mutantes
        function getNome(){
            return $this->_nome;
        }
        function setNome($value){
            $this ->_nome = $value;
        }
        function getIdade(){
            return $this->_idade;
        }
        function setIdade($idade){
            $this->_idade = $idade;
        }
    }
?>