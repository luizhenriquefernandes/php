<?php
require_once 'Pessoa.php';
//extends tradução estende, herda tudo da classe pai
class Professor extends Pessoa
{
    protected $salario;
    protected $especializacao;
    protected $idiomas;
    protected $formacao;
    protected $licenciatura;
    //métodos especiais
    public function aumentoSalario()
    {
        $this->setSalario($this->getSalario()+$this->getSalario()*0.05);
        print("Salário aumentado, parabéns pelo aumento!!!!!");
    }
    public function licenciatura()
    {
        if ($this->getLicenciatura()==true)
        {
            print("<p>O Professor ".$this->getNome()." é Licenciado, <br>terá prioridade no aumento e na atribuição de aulas</p><br>");
        }
    }

    //fazer getter and setter

    

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of especializacao
     */ 
    public function getEspecializacao()
    {
        return $this->especializacao;
    }

    /**
     * Set the value of especializacao
     *
     * @return  self
     */ 
    public function setEspecializacao($especializacao)
    {
        $this->especializacao = $especializacao;

        return $this;
    }

    /**
     * Get the value of idiomas
     */ 
    public function getIdiomas()
    {
        return $this->idiomas;
    }

    /**
     * Set the value of idiomas
     *
     * @return  self
     */ 
    public function setIdiomas($idiomas)
    {
        $this->idiomas = $idiomas;

        return $this;
    }

    /**
     * Get the value of formacao
     */ 
    public function getFormacao()
    {
        return $this->formacao;
    }

    /**
     * Set the value of formacao
     *
     * @return  self
     */ 
    public function setFormacao($formacao)
    {
        $this->formacao = $formacao;

        return $this;
    }

    /**
     * Get the value of licenciatura
     */ 
    public function getLicenciatura()
    {
        return $this->licenciatura;
    }

    /**
     * Set the value of licenciatura
     *
     * @return  self
     */ 
    public function setLicenciatura($licenciatura)
    {
        $this->licenciatura = $licenciatura;

        return $this;
    }
}
?>