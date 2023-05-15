<?php
require_once 'Animal.php';
class Mamifero extends Animal
{
    private $corPelo;

public function locomover()
{
    print("<p>Correndo</p>");
}
public function alimentar()
{
    print("<p>Mamando</p>");
}
public function emitirSom()
{
    print("<p>Som de Mamífero</p>");

}
    
    //getter and setter
    /**
     * Get the value of corPelo
     */ 
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     *
     * @return  self
     */ 
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}
