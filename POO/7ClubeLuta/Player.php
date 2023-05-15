<?php

class Player
{
    private $nome;
    private $idade;
    private $nacionalidade;
    private $altura;
    private $peso;
    private $classe;
    private $vitorias;
    private $derrotas;
    private $empates;
    // método construtor



    //Métodos modificadores getters and setters

    //Métodos
    /**
     * @param $nome
     * @param $idade
     * @param $nacionalidade
     * @param $altura
     * @param $peso
     * @param $vitorias
     * @param $derrotas
     * @param $empates
     */
    public function __construct($nome, $idade, $nacionalidade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }


    public function apresentar()
    {
        print("<h1>Utilizando o método apresentar</h1>");
        echo("<p>--------------------------<p/>");
        echo("<p>Lutador: {$this->getNome()} </p>");
        echo("<p>É da Classe  {$this->getClasse()}</p>");
        echo("<p>Idade:  {$this->getIdade()} e pesa:  {$this->getPeso()}Kg</p>");
        echo("<p>Seu número de vitórias é: {$this->getVitorias()}</p>");
        echo("<p> possui {$this->getDerrotas()} derrotas e teve {$this->getEmpates()}</p> empates <br>");
        echo("<p>--------------------------<p/>");
    }
    public function status()
    {
        echo("<p>---------------------------<p/>");
        echo("<br> nome: ".$this->getNome());
        echo("<br> idade: ".$this->getIdade());
        echo("<br> nacionalidade: ".$this->getNacionalidade());
        echo("<br> altura: ".$this->getAltura());
        echo("<br> peso: ".$this->getPeso());
        echo("<br> classe: ".$this->getClasse());
        echo("<br> vitorias: ".$this->getVitorias());
        echo("<br> derrotas: ".$this->getDerrotas());
        echo("<br> empates: ".$this->getEmpates());
        echo("<p>--------------------------<p/>");
    }
    public function ganharLuta()
    {
        echo("<br>Ganhou a luta!!!".$this->setVitorias($this->getVitorias()+1));

    }
    public function perderLuta()
    {
        echo("<br>Perdeu a luta!!!".$this->setDerrotas($this->getDerrotas()+1));
    }
    public function empates()
    {
        echo("<br>Empatou".$this->setEmpates($this->getEmpates()+1));
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome/*atributo*/ = $nome/*parâmetro*/;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * @param mixed $nacionalidade
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setClasse();
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $classe
     */
    private function setClasse()
    {

        if ($this->getPeso() <= 50)
        {
            $this->classe ="Half";
        }
        elseif ($this->getPeso() <= 70)
        {
            $this->classe = "Elfo";
        }
        elseif ($this->getPeso() <= 90)
        {
            $this->classe = "Humano";
        }
        elseif ($this->getPeso() <= 150)
        {
            $this->classe = "Ork";
        }
        else
        {
            echo"Inválido";
        }
    }

    /**
     * @return mixed
     */
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * @param mixed $vitorias
     */
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    /**
     * @return mixed
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * @param mixed $derrotas
     */
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    /**
     * @return mixed
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * @param mixed $empates
     */
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }



}