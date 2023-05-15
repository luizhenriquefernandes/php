<?php
require_once 'Player.php';
class Combate
{
    //Atributos
    private $desafiado;
    private $desafiante;
    private $turno;
    private $aprovada;

//Metodos Publicos
    public function marcarCombate($p0, $p1)
    {//=== serve para testar se o objeto é idêntico igual e do mesmo tipo
        if ($p0->getClasse() === $p1->getClasse() && $p0 != $p1) {
            $this->aprovada = true;
            $this->desafiado = $p0;
            $this->desafiante = $p1;


        } else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->deafiante = null;

        }

    }

    public function lutar()
    {
        if ($this->aprovada) {

            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case (0): //empate
                    echo("<p>Empate</p><br>");
                    $this->desafiado->empates();
                    $this->desafiante->empates();
                    break;
                case (1):
                    echo("<p>O desafiado é: {$this->desafiado->getNome()}</p><br>");
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case (2):
                    echo("<p>O Desafiante {$this->desafiante->getNome()}.</p><br>");
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                default:
                    echo("<p>Opção Inválida</p>");


            }


        } else {
            print("<p>A luta não pode ocorrer!</p><br>");
        }
    }

    /**
     * @return mixed
     */
    public
    function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * @param mixed $desafiado
     */
    public
    function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    /**
     * @return mixed
     */
    public
    function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * @param mixed $desafiante
     */
    public
    function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    /**
     * @return mixed
     */
    public
    function getTurno()
    {
        return $this->turno;
    }

    /**
     * @param mixed $turno
     */
    public
    function setTurno($turno)
    {
        $this->turno = $turno;
    }

    /**
     * @return mixed
     */
    public
    function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * @param mixed $aprovada
     */
    public
    function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
    //Metodos Acessores


}