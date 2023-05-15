<?php
class ContaCorrente
{
    private $nome;
    private $cpf;
    private $dataNasc;
    private $saque;
    private $deposito;
    private $juros;
    private $saldo;
    //depositar 50, 100 sacar 50,100
   


    public function __construct($nome, $cpf, $dataNasc, $saldo )
    {
        $this-> setNome($nome);
        $this-> setCpf($cpf);
        $this-> setDataNasc($dataNasc);
        $this-> setSaldo($saldo);        
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
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of dataNasc
     */ 
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    /**
     * Set the value of dataNasc
     *
     * @return  self
     */ 
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;

        return $this;
    }

    /**
     * Get the value of saque
     */ 
    public function getSaque()
    {
        return $this->saque;
    }

    /**
     * Set the value of saque
     *
     * @return  self
     */ 
    public function setSaque($saque)
    {
        $this->saque = $saque;

        return $this;
    }

    /**
     * Get the value of deposito
     */ 
    public function getDeposito()
    {
        return $this->deposito;
    }

    /**
     * Set the value of deposito
     *
     * @return  self
     */ 
    public function setDeposito($deposito)
    {
        $this->deposito = $deposito;

        return $this;
    }

    /**
     * Get the value of juros
     */ 
    public function getJuros()
    {
        return $this->juros;
    }

    /**
     * Set the value of juros
     *
     * @return  self
     */ 
    public function setJuros($juros)
    {
        $this->juros = $juros;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }
}
?>