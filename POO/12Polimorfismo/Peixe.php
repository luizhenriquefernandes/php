<?php
require_once 'animal.php';
class Peixe extends Animal
{
    private $corEscama;
    public function locomover(){
        print("<p>Nadando</p>");
    }
    public function alimentar(){
        print("<p>Caçando peixes menores</p>");

    }
    public function emitirSom(){
        print("<p>Não emite som</p>");
    }
    public function soltarBolhas(){
        print("<p>Soltando Bolhas</p>");
    }
    //getter and Setter    


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
