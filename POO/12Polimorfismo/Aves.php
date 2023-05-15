<?php
require_once 'Animal.php';
class Aves extends Animal
{
    private $corPena;
    
	/**
	 *
	 * @return mixed
	 */
	function locomover() {
		print("<p>Voando</p>");
	}
	
		
	function alimentar() {
		print("<p>Comando Frutas</p>");
	}
	
	/**
	 *
	 * @return mixed
	 */
	function emitirSom() {
		print("<p>Gorgeando</p>");
	}
	public function fazerNinho(){
		print("<p>Fazendo Ninho</p>");
	}


    /**
     * Get the value of corPena
     */ 
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     *
     * @return  self
     */ 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}
