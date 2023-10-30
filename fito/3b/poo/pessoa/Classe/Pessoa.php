<?php 
    class Pessoa{
        private $_nome;
        private $_dataNascimento;
        //Calcular idade
        function idade($dataNascimento,$anoAtual){
            $dataNascimento = $this->_dataNascimento;
            $anoAtual = new DateTime();
            return $dataNascimento->date_diff($anoAtual);
        }
        //construtor
        function __construct($nome, $dataNascimento){
            $this->_nome = $nome;
            $this->_dataNascimento = $dataNascimento;
        }
        //métodos especiais
        function apresentar(){
            print("Olá {$this->getNome()} tudo bem? você tem {$this->getdataNascimento()} 
            anos<br>");
        }

        //Métodos acessores e mutantes
        function getNome(){
            return $this->_nome;
        }
        function setNome($valor){
            $this->_nome = $valor;
        }
        function getdataNascimento(){
            return $this->_dataNascimento;
        }
        function setdataNascimento($dataNascimento){
            $this->_dataNascimento = $dataNascimento;
        }
    }
?>