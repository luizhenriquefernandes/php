<?php

class Bolo
{
  private $sabor;
  private $peso;
  private $valor;
  private $formaUntada = false;
//métdodos getters and setters



  /**
   * Get the value of sabor
   */ 
  public function getSabor()
  {
    return $this->sabor;
  }

  /**
   * Set the value of sabor
   *
   * @return  self
   */ 
  public function setSabor($sabor)
  {
    $this->sabor = $sabor;

    return $this;
  }

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
   * Get the value of valor
   */ 
  public function getValor()
  {
    return $this->valor;
  }

  /**
   * Set the value of valor
   *
   * @return  self
   */ 
  public function setValor($valor)
  {
    $this->valor = $valor;

    return $this;
  }

  /**
   * Get the value of formaUntada
   */ 
  public function getFormaUntada()
  {
    return $this->formaUntada;
  }

  /**
   * Set the value of formaUntada
   *
   * @return  self
   */ 
  public function setFormaUntada($formaUntada)
  {
    $this->formaUntada = $formaUntada;

    return $this;
  }
}
?>