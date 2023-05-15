<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
    //atributos
private $volume;
private $ligado;
private $tocando;
// métodos especiais
//construtor
    /**
     * @param $volume
     */
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando= false;
    }
    //funcoes abstratas
    /*É necessário colocar tudo em privado no index inserir somente os métodos da interface...*/

    function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        echo("<br>");
        echo("Está ligado? :".($this->getLigado())?" Sim ":" Não ");
        echo("<br>");
        echo("Está tocando?: ".($this->getTocando())?"Sim":"Não");
        echo("<br>");
        echo("Volume: ".$this->getVolume());
        echo("<br>");
        for ($i=0;$i<$this->getVolume(); $i+=10)
        {
            echo("|");
        }
        echo("<br");
    }


    public function fecharMenu()
    {
        echo("<br> Fechando Menu");
    }

    public function maisVolume()
    {
        if ($this->getLigado())
        {
            $this->setVolume($this->getVolume()+5);
        }
    }

    public function menosVolume()
    {
        if ($this->getLigado())
        {
            $this->setVolume($this->getVolume()-5);
        }
    }

    public function ligarMudo()
    {
        if ($this->getLigado()&&$this->getVolume()>0)
        {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado()&&$this->getVolume()==0)
        {
            $this->getVolume(50);
        }
    }

    public function play()
    {
        if ($this->getLigado()&&$this->getTocando())
        {
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if($this->getLigado()&&$this->getTocando())
        {
            $this->setTocando(false);
        }
    }

    //getter and setters

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return false
     */
    public function getLigado()
    {
        return $this->ligado;
    }

    /**
     * @param false $ligado
     */
    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    /**
     * @return false
     */
    public function getTocando()
    {
        return $this->tocando;
    }

    /**
     * @param false $tocando
     */
    public function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }

}
?>