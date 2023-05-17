<?php
    class Carro{
        private $name;       

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name): self
        {
                $this->name = $name;

                return $this;
        }
        public function ligarCarro(){
            print('<br>Estou ligado bruuummmm<br>');
        }
    }
?>