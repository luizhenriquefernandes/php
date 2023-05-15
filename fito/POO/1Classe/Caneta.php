<?php
class Caneta
{
  private $modelo;
  private $marca;
  private $cor;
  private $espessura;
  private $tampada = true;
//Metodos especiais
    public function escrever()
    {
        if($this->getTampada()==true)
        {
            print('Não posso escrever estou tampada');
        }
        else
        {
            print('Estou Escrevendo');
        }
    }
    public function tampar()
    {
        $this->setTampada($this->getTampada(true));
        print('<br>Tampada<br>');
    }
    public function destampar()
    {
        $this->setTampada($this ->getTampada(false));
        print('<br>Estou destampada<br>');
    }
    

  public function getModelo()
  {
    return $this->modelo;
  }
   public function setModelo($modelo)
  {
    $this->modelo = $modelo;

    return $this;
  }

  /**
   * Get the value of marca
   */ 
  public function getMarca()
  {
    return $this->marca;
  }

  /**
   * Set the value of marca
   *
   * @return  self
   */ 
  public function setMarca($marca)
  {
    $this->marca = $marca;

    return $this;
  }

  /**
   * Get the value of cor
   */ 
  public function getCor()
  {
    return $this->cor;
  }

  /**
   * Set the value of cor
   *
   * @return  self
   */ 
  public function setCor($cor)
  {
    $this->cor = $cor;

    return $this;
  }

  /**
   * Get the value of espessura
   */ 
  public function getEspessura()
  {
    return $this->espessura;
  }

  /**
   * Set the value of espessura
   *
   * @return  self
   */ 
  public function setEspessura($espessura)
  {
    $this->espessura = $espessura;

    return $this;
  }

  /**
   * Get the value of tampada
   */ 
  public function getTampada()
  {
    return $this->tampada;
  }

  /**
   * Set the value of tampada
   *
   * @return  self
   */ 
  public function setTampada($tampada)
  {
    $this->tampada = $tampada;

    return $this;
  }
}
?>