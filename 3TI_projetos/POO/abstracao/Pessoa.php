<?php
//Classe progenitora abstract ela só pode ser utilizada para herança
abstract class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;
    // metodo especial
    public function fazerAniversario()
    {
        $this -> setIdade ($this -> getIdade()+1);
        print("<p>Feliz Aniversário sua idade agora é {$this-> getIdade()}</p><br>");
    }
    //FAZER GETTER AND SETTER
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
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}
?>