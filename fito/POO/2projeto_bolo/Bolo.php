<?php

class Bolo
{
  private $nome;
  private $tipo;
  private $sabor;
  private $peso;
  private $preco;
  private $untada = false;
  //métodos acessores e mutantes
  
  
  //inserir massa
  //untar forma
  //limpar forma  
  //desenformar
  //rechear 
 //MÉTODO DE DESCONTO
  public function desconto60()
  {
    if($this->getPreco()>=60)
    {

      print("<br>Bolo com 10% de desconto valor do desconto: R$".number_format($this->getPreco()*0.10,2,".",","." <br>"));
      $this->setPreco($this->getPreco()-$this->getPreco()*0.10);
      print("<br>Bolo com 10% de desconto valor total do desconto R$".number_format($this->getPreco(),2,".",",")."<br>");
      
    }
    else
    {
      print("<br>Bolo sem desconto<br>");
    }
  }
  public function coberturaAdicionalChocolate()
  {
    print('Bolo com cobertura adicional');
    $this->setPreco($this->getPreco()+15);
  }
  public function inserirMassa()
  {
    if($this->getUntada() == false)
    {
      print("<br>");
        print('Não pode inserir massa, a forma não esta untada <br>');
    }
    else
    {
      print("<br>");
        print('Estou untada e a massa está sendo derramada <br>');
    }
  }
   

  public function untarForma()
  {
    $this->setUntada(true);
  } 
  public function limparForma()
  {
    $this->setUntada(false);
  }

  //Método construtor ou constructor
  public function __construct($nome, $tipo, $sabor, $peso, $preco)
  {
    $this->setNome($nome);
    $this->setTipo($tipo);
    $this->setSabor($sabor);
    $this->setPeso($peso);
    $this->setPreco($preco);    
  }
  
  //métodos acessores e métodos mutantes

  public function getNome()
  {
    return $this->nome;
  }
  public function setNome($nome)
  {
    $this-> nome = $nome;
  }
  public function getTipo()
  {
    return $this -> tipo;    
  }
  public function setTipo($tipo)
  {
    $this -> tipo = $tipo;
  }
  public function getSabor()
  {
    return $this -> sabor;
  }
  public function setSabor($sabor)
  {
    $this -> sabor = $sabor;
  }
  public function getPeso()
  {
    return $this -> peso;
  }
  public function setPeso($peso)
  {
    $this-> peso = $peso;
  }
  public function getPreco()
  {
    return $this -> preco;
  }
  public function setPreco($preco)
  {
    $this -> preco = $preco;
  }
  public function getUntada()
  {
    return $this -> untada;
  }
  public function setUntada($untada)
  {
    $this -> untada = $untada;
  }
 
}
?>