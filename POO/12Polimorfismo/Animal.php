<?php

abstract class Animal
{
  private $peso;
  private $idade;
  private $membros;
  abstract public function locomover();
  abstract public function alimentar();
  abstract public function emitirSom();


  /**
   * Get the value of peso
   */ 
  public function getPeso()
  {
    return $this->peso;
  }

  /**
   * Set the value of peso
   *
   * @return  self
   */ 
  public function setPeso($peso)
  {
    $this->peso = $peso;

    return $this;
  }

  /**
   * Get the value of idade
   */ 
  public function getIdade()
  {
    return $this->idade;
  }

  /**
   * Set the value of idade
   *
   * @return  self
   */ 
  public function setIdade($idade)
  {
    $this->idade = $idade;

    return $this;
  }

  /**
   * Get the value of membros
   */ 
  public function getMembros()
  {
    return $this->membros;
  }

  /**
   * Set the value of membros
   *
   * @return  self
   */ 
  public function setMembros($membros)
  {
    $this->membros = $membros;

    return $this;
  }
}
