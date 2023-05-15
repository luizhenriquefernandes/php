<?php
abstract class Pessoa
{
  private $nome;
  private $sexo;
  private $dataNascimento;

  
  
  
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
    
}
?>