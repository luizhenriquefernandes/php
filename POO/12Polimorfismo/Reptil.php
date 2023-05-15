<?php
require_once 'Animal.php';
class Reptil extends Animal
{
    private $corEscama;


    
	/**
	 *
	 * @return mixed
	 */
	function locomover() {
        print("<p>Restejando</p>");
	}
	
	/**
	 *
	 * @return mixed
	 */
	function alimentar() {
        print("<p>Comendo Carne</p>");
	}
	
	/**
	 *
	 * @return mixed
	 */
	function emitirSom() {
        print("<p>Silvando</p>");
	}
    //getter and setter


    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}
