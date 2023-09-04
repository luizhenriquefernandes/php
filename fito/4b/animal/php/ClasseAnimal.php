<?php 
    class ClasseAnimal{
        protected $_nome;
        protected $_peso;

        //métodos acessores e mutantes
        //get
        

        /**
         * Get the value of _nome
         */
        public function get_nome()
        {
                return $this->_nome;
        }
        /**
         * Set the value of _nome
         */
        public function set_nome($_nome)
        {
                $this->_nome = $_nome;
                return $this;              
        }

        /**
         * Get the value of _peso
         */
        public function get_peso()
        {
                return $this->_peso;
        }

        /**
         * Set the value of _peso
         */
        public function set_peso($_peso)
        {
                $this->_peso = $_peso;

                return $this;
        }
    }
?>