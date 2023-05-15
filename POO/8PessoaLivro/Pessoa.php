<?php
require_once 'Livro.php';

class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;
    /*
     *  private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto = false;
    private $leitor;
     *
     * */
    // metodos acessores
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    //
    public function fazerAniversario()
    {
        $this->idade ++;
    }
}