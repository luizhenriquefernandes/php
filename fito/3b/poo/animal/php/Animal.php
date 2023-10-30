<?php 
    class Animal{
        private $_nome;
        //criar construtor
        public function __construct($nome) {
            $this->_nome = $nome;
        } 
        //métodos
        public function status(){
            print("Olá {$this->getNome()} Tudo bem?");
        }       
        //getter e setter
        public function getNome(){
            return $this->_nome;
        }
        public function setNome($nome){
            $this->_nome = $nome;
        }

    
	
}
?>