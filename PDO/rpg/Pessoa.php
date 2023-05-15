<?php

abstract class Pessoa
{
    protected ?string $nome;
    protected ?string $raca;
    protected ?string $profissao;
    protected ?int $constituicao;
    protected ?int $destreza;
    protected ?int $forca;
    protected ?int $inteligencia;
    protected ?int $sabedoria;
    protected ?int $carisma;
    //getter and setter
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(?string $nome)
    {
        $this->nome = $nome;
    }
    public function getRaca()
    {
        return $this->raca;
    }
    public function setRaca(?string $raca)
    {
        $this->raca = $raca;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Set the value of profissao
     *
     * @return  self
     */ 
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;

        return $this;
    }

    /**
     * Get the value of constituicao
     */
    public function getConstituicao()
    {
        return $this->constituicao;
    }

    /**
     * Set the value of constituicao
     *
     * @return  self
     */
    public function setConstituicao($constituicao)
    {
        $this->constituicao = $constituicao;

        return $this;
    }

    /**
     * Get the value of destreza
     */
    public function getDestreza()
    {
        return $this->destreza;
    }

    /**
     * Set the value of destreza
     *
     * @return  self
     */
    public function setDestreza($destreza)
    {
        $this->destreza = $destreza;

        return $this;
    }

    /**
     * Get the value of forca
     */
    public function getForca()
    {
        return $this->forca;
    }

    /**
     * Set the value of forca
     *
     * @return  self
     */
    public function setForca($forca)
    {
        $this->forca = $forca;

        return $this;
    }

    /**
     * Get the value of inteligencia
     */
    public function getInteligencia()
    {
        return $this->inteligencia;
    }

    /**
     * Set the value of inteligencia
     *
     * @return  self
     */
    public function setInteligencia($inteligencia)
    {
        $this->inteligencia = $inteligencia;

        return $this;
    }

    /**
     * Get the value of carisma
     */
    public function getCarisma()
    {
        return $this->carisma;
    }

    /**
     * Set the value of carisma
     *
     * @return  self
     */
    public function setCarisma($carisma)
    {
        $this->carisma = $carisma;

        return $this;
    }

    /**
     * Get the value of sabedoria
     */
    public function getSabedoria()
    {
        return $this->sabedoria;
    }

    /**
     * Set the value of sabedoria
     *
     * @return  self
     */
    public function setSabedoria($sabedoria)
    {
        $this->sabedoria = $sabedoria;

        return $this;
    }

    /**
     * Get the value of profissao
     */ 
    
}
?>
