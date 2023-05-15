<?php
    
class Mago extends Pessoa
{
  private ?string $arma;
  private ?int $categoriaArmadura;
  private ?int $pontosVida;
  private ?int $magiaDia;
  
  function __construct( $nivel, $nome,  $raca, $profissao, $constituicao,  $destreza, $forca, $inteligencia,  $sabedoria,  $carisma,  $arma,  $categoriaArmadura,  $pontosVida,  $magiaDia)
  {
    $this->setNivel ($nivel);
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
  
  function ataqueCajadoMagico()
  {
    print("<br>Dano é 1d6 + 3<br>");
    print("<br>As mãos repentimante ficam gélidas e o ar pesa e a toda forma de calor padece perante a força do gelo, a tepidez berijela e o todo torna-se estático e gélido.<br>");
    $this->setDano(random_int(1,6)+3);
    print("O dano foi {$this->getDado()}");
  }
  function raioDeGelo()
  {
    print("<br>Dano é 1d8 + 3<br>");
    print("<br>As mãos repentimante ficam gélidas e o ar pesa e a toda forma de calor padece perante a força inexorável do gelo, o inverno belijera e um vórtice de ar denso eletronegativo estabelece o sepulcro, o todo torna-se estático e eterno.<br>");
    $this->setDano((random_int(1,8)+3));
    print("O dano foi {$this->getDano()}");
  }
  function misseisMagicos()
  {
    print("<br>Dano é 1d4 + 3<br>");
    print("<br>Toda luz torna-se lúgubre e um plasma verdejante surge, uma força mística condença uma força misteriosa condença um esfera de energia como uma flâmula torna-se cálida e voam tenaz e veloz até o inimigo.<br>");
    $this->setDano((random_int(1,4)+3));
    print("O dano foi {$this->getDado()}");
  }
    
  function maosFlamejantes()
  {
    print("Dano em cone são 3 d6 e gasta dois slots de magia<br>");
    print("O mago aponta as suas mãos para a frente e seu vórtice de chamas saem de seus dedos incinerando seus inimigos<br>");
    $this->setMagiaDia($this->getMagiaDia()-2);
    print("Magia realizada com sucesso <br>Seu slot de magia é: {$this->getMagiaDia()}<br>");
  }
  function corda()
  {
    print("<br>Restaura");
    print("<br>A corda obedece a mente, o controlador cria e o objeto obedece o pensar.<br>");
    $this->setDano(random_int(1,4)+3);
    print("O dano foi {$this->getDado()}");
  }
  
  
  function statusAtual()
  {
    
    print("<p>O status atual é:</p><br>");
    print("<p>Nível {$this->getNivel()}<br>
          <br>Nome {$this->getNome()}<br>              
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
  function defeza()
  {
    if($this->getCategoriaArmadura()<8)
    {
      $this->setCategoriaArmadura($this->getCategoriaArmadura()-1);
      print("Defeza {$this->getCategoriaArmadura()}");
    }
    elseif ($this->getCategoriaArmadura()>10 && $this->getCategoriaArmadura()<=12)
    {
      $this->setCategoriaArmadura($this->getCategoriaArmadura()+$this->getDestreza()+2);
      print("Defeza {$this->getCategoriaArmadura()}");
    }
    elseif ($this->getCategoriaArmadura()>=14 && $this->getCategoriaArmadura()<16)
    {
      $this->setCategoriaArmadura($this->getCategoriaArmadura()+3);
      print("Defeza {$this->getCategoriaArmadura()}");
    }
    elseif ($this->getCategoriaArmadura()>=18)
    {
      $this->setCategoriaArmadura($this->getCategoriaArmadura()+4);
      print("Defeza {$this->getCategoriaArmadura()}");
    }

  }
  
  
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
