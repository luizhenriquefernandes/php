<?php

class Bolo
{
  private $nome;
  private $tipo;
  private $sabor;
  private $peso;
  private $preco;
  private $untada = false;
  
  //inserir massa
  //untar forma
  //limpar forma  
  //desinformar
  //rechear 
  public function inserirMassa()
  {
    if($this->getUntada() == false)
    {
        print('Não pode inserir massa, a forma não esta untada <br>');
    }
    else
    {
        print('Estou untada e a massa está sendo derramada <br>');
    }
  }
  public function untarForma()
  {
    $this->setUntada($this->getUntada()+true);
  }
  public function limparForma()
  {
    $this->setUntada(false);
  }


  /**
   * Get the value of nome
   */ 
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   *
   * @return  self
   */ 
  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }

  /**
   * Get the value of tipo
   */ 
  public function getTipo()
  {
    return $this->tipo;
  }

  /**
   * Set the value of tipo
   *
   * @return  self
   */ 
  public function setTipo($tipo)
  {
    $this->tipo = $tipo;

    return $this;
  }

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
   * Get the value of preco
   */ 
  public function getPreco()
  {
    return $this->preco;
  }

  /**
   * Set the value of preco
   *
   * @return  self
   */ 
  public function setPreco($preco)
  {
    $this->preco = $preco;

    return $this;
  }

  /**
   * Get the value of untada
   */ 
  public function getUntada()
  {
    return $this->untada;
  }

  /**
   * Set the value of untada
   *
   * @return  self
   */ 
  public function setUntada($untada)
  {
    $this->untada = $untada;

    return $this;
  }
}
?>