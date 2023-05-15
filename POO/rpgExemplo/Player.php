<?php
class Player
{
    private $forca;
	private $destreza;
	private $constituicao;
	private $inteligencia;
	private $sabedoria;
	private $carisma;	
	private $nome;
    private $categoriaArmadura;
    private $vida;
    private $dano;
	

	
    // metodo categoria de armadura
    public function ganharCategoria()
    {
        $this->setCategoriaArmadura($this->getCategoriaArmadura()+1);
    }
    public function soco()
    {
        $this->setDano(rand(1,6));
    }
	
	// métodos acessores

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
     * Get the value of categoriaArmadura
     */ 
    public function getCategoriaArmadura()
    {
        return $this->categoriaArmadura;
    }

    /**
     * Set the value of categoriaArmadura
     *
     * @return  self
     */ 
    public function setCategoriaArmadura($categoriaArmadura)
    {
        $this->categoriaArmadura = $categoriaArmadura;

        return $this;
    }

    /**
     * Get the value of vida
     */ 
    public function getVida()
    {
        return $this->vida;
    }

    /**
     * Set the value of vida
     *
     * @return  self
     */ 
    public function setVida($vida)
    {
        $this->vida = $vida;

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