<?php 
    class Banco{
        private $saldo;
        private $valor;
        private $deposito;

        function __construct($saldo,$valor,$deposito){
            $this->saldo = $saldo;
            $this->valor = $valor;
            $this->deposito = $deposito;
        } 
        /**
         * Get the value of saldo
         */
        public function getSaldo()
        {
                return $this->saldo;
        }
        /**
         * Set the value of saldo
         */
        public function setSaldo($saldo): self
        {
                $this->saldo = $saldo;

                return $this;
        }

        /**
         * Get the value of valor
         */
        public function getValor()
        {
                return $this->valor;
        }

        /**
         * Set the value of valor
         */
        public function setValor($valor): self
        {
                $this->valor = $valor;

                return $this;
        }

        /**
         * Get the value of deposito
         */
        public function getDeposito()
        {
                return $this->deposito;
        }

        /**
         * Set the value of deposito
         */
        public function setDeposito($deposito): self
        {
                $this->deposito = $deposito;

                return $this;
        }
    }
?>