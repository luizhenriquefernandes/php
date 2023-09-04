<?php
class Pessoa
{
  protected $nome;
  protected $sexo;
  protected $dataNascimento;
   public function __construct($nome, $sexo, $dataNascimento)
   {
    $this -> nome = $nome;
    $this -> sexo = $sexo;
    $this -> dataNascimento = $dataNascimento;
   }  
  public function getNome()
  {
    return $this->nome;
  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getSexo()
  {
    return $this->sexo;
  }
  public function setSexo($sexo)
  {
    $this->sexo = $sexo;
  }
  public function getDataNascimento()
  {
    return $this->dataNascimento;
  }
  public function setDataNascimento($dataNascimento)
  {
    $this->dataNascimento = $dataNascimento;
  }
  //métodos especiais
  public function andar(){
    print("Estou andando porque sou uma pessoa<br>");
  }
  public function comendo(){
    print("Estou comendo comidinha de uma pessoa<br>");
  }
}
?>