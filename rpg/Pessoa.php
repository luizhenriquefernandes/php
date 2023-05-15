<?php

abstract class Pessoa
{
    protected ? int $nivel;
    protected ?string $nome;
    protected ?string $raca;
    protected ?string $profissao;
    protected ?int $constituicao;
    protected ?int $destreza;
    protected ?int $forca;
    protected ?int $inteligencia;
    protected ?int $sabedoria;
    protected ?int $carisma;
    protected ?int $dado;
    protected ? int $dano;
    
    public function dado4()
    {
        $this->setDado(random_int(1,4));
        print("<br>O dado de 4 lados foi rolado e o resultado é: {$this->getDado()}");
    }
    public function dado20()
    {
        $this->setDado(random_int(1,20));
        print("<br>O dado de 20 lados foi rolado e o resultado é: {$this->getDado()}");
    }
    public function oitoDado10()
    {
        $c=0;
        for($i = 0; $i<8; $i++)
        {
        $this->setDado(random_int(1,10));
        $c += $this->getDado();
        print("<br>O dado de 10 lados foi rolado e o resultado é: {$this->getDado()}<br>");
        }
        print("<br>O total de oito dados de 10 dano é = {$c}<br>");
    }
    public function tresDado10()
    {
        $c=0;
        for($i = 0; $i<3; $i++)
        {
        $this->setDado(random_int(1,10));
        $c += $this->getDado();
        print("<br>O dado de 10 lados foi rolado e o resultado é: {$this->getDado()}<br>");
        }
        print("<br>O total de três dados de 10 dano é = {$c}<br>");
    }
    public function seiDado10()
    {
        $c=0;
        for($i = 0; $i<6; $i++)
        {
        $this->setDado(random_int(1,10));
        $c += $this->getDado();
        print("<br>O dado de 10 lados foi rolado e o resultado é: {$this->getDado()}<br>");
        }
        print("<br>O total de 6 dados de 10 é = {$c}<br>");
    }
   


    public function getDado()
    {
        return $this->dado;
    }
    public function setDado(?int $dado)
    {
        $this->dado = $dado;
    }
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

    /**
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */ 
    public function setNivel(?int $nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get the value of dano
     */ 
    public function getDano()
    {
        return $this->dano;
    }

    /**
     * Set the value of dano
     *
     * @return  self
     */ 
    public function setDano($dano)
    {
        $this->dano = $dano;

        return $this;
    }
}
