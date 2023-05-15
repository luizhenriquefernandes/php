<?php
    
class Mago extends Pessoa
{
  private ?string $arma;
  private ?int $categoriaArmadura;
  private ?int $pontosVida;
  private ?int $magiaDia;
  
  function __construct( $nome,  $raca, $profissao, $constituicao,  $destreza, $forca, $inteligencia,  $sabedoria,  $carisma,  $arma,  $categoriaArmadura,  $pontosVida,  $magiaDia)
  {
    $this->setNome($nome);
    $this->setRaca($raca);
    $this->setProfissao($profissao);
    $this->setConstituicao($constituicao);
    $this->setDestreza($destreza);
    $this->setForca($forca);
    $this->setInteligencia($inteligencia);
    $this->setSabedoria($sabedoria);
    $this->setCarisma($carisma);    
    $this->setArma($arma);
    $this->setCategoriaArmadura($categoriaArmadura);
    $this->setPontosVida($pontosVida);
    $this->setMagiaDia($magiaDia);
  }
  function maosFlamejantes()
  {
    print("Dano em cone são 3 d6 e gasta dois slots de magia<br>");
    print("O mago aponta as suas mãos para a frente e seu vórtice de chamas saem de seus dedos incinerando seus inimigos<br>");
    $this->setMagiaDia($this->getMagiaDia()-2);
    print("Magia realizada com sucesso <br>Seu slot de magia é: {$this->getMagiaDia()}<br>");
  }
  
  
  function statusAtual()
  {
    
    print("<p>O status atual é:</p><br>");
    print("<p>Nome {$this->getNome()}<br>              
          <br>Raça {$this->getRaca()}<br></p>
          <br>Profissão {$this->getProfissao()}<br></p>
          Constituição {$this->getConstituicao()}<br></p>
          Destreza {$this->getDestreza()}<br></p>
          Força {$this->getForca()}<br></p>
          Inteligência {$this->getInteligencia()}<br></p>
          Sabedoria {$this->getSabedoria()}<br></p>
          Carisma {$this->getCarisma()}<br></p>
          Arma {$this->getArma()}<br></p>
          Categoria {$this->getCategoriaArmadura()}<br></p>
          Pontos Vida {$this->getPontosVida()}<br></p>
          Magia {$this->getMagiaDia()}<br></p>");
  }

  /**
   * Get the value of arma
   */ 
  public function getArma()
  {
    return $this->arma;
  }

  /**
   * Set the value of arma
   *
   * @return  self
   */ 
  public function setArma(?string $arma)
  {
    $this->arma = $arma;

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
  public function setCategoriaArmadura(?int $categoriaArmadura)
  {
    $this->categoriaArmadura = $categoriaArmadura;

    return $this;
  }

  /**
   * Get the value of pontosVida
   */ 
  public function getPontosVida()
  {
    return $this->pontosVida;
  }

  /**
   * Set the value of pontosVida
   *
   * @return  self
   */ 
  public function setPontosVida(?int $pontosVida)
  {
    $this->pontosVida = $pontosVida;

    return $this;
  }

  /**
   * Get the value of magiaDia
   */ 
  public function getMagiaDia()
  {
    return $this->magiaDia;
  }

  /**
   * Set the value of magiaDia
   *
   * @return  self
   */ 
  public function setMagiaDia(?int $magiaDia)
  {
    $this->magiaDia = $magiaDia;

    return $this;
  }
}
