<?php 
    class ContaCliente{
        protected $_nome;
        protected $_saldo;
        protected $_saque;
        protected $_deposito;

        public function sacar10(){
            $this->set_saldo($this->get_saldo()-10);         
            print("O saque foi de R$10,00.<br>Valor do saldo atual {$this->get_saldo()}");
            }
        public function __construct($nome, $saldo) {
            $this->_nome = $nome;
            $this->_saldo = $saldo;
        }

       

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
         * Get the value of _saque
         */
        public function get_saque()
        {
                return $this->_saque;
        }

        /**
         * Set the value of _saque
         */
        public function set_saque($_saque)
        {
                $this->_saque = $_saque;

                return $this;
        }

        /**
         * Get the value of _saldo
         */
        public function get_saldo()
        {
                return $this->_saldo;
        }

        /**
         * Set the value of _saldo
         */
        public function set_saldo($_saldo)
        {
                $this->_saldo = $_saldo;

                return $this;
        }

        /**
         * Get the value of _deposito
         */
        public function get_deposito()
        {
                return $this->_deposito;
        }

        /**
         * Set the value of _deposito
         */
        public function set_deposito($_deposito)
        {
                $this->_deposito = $_deposito;

                return $this;
        }
    }
?>