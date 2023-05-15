<?php

class Planta
{
    public $tipo;
    private $ovario;
    private $tamanho;
    private $embalada;

    //criando métodos construtores para criar é necessário ter 2 underlines __
    public function __construct()
        /*Pode declarar a função também igual ao java
    *public funtion Planta(){}*/
    {
       $this->tipo = "Hortaliça";
       $this->ovario = "Ínfero";
       $this->tamanho = 1.5;
       $this->embalar();

    }
    public function getTamanho()
    {
        return $this->tamanho;
    }
    public function setTamano($h)
    {
        $this->tamanho = $h;
    }
    public function embalar()
    {
        $this->embalada = true;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;
    }

    public function getOvario()
    {
        return $this->ovario;
    }

    public function setOvario($o)
    {
        $this->ovario = $o;
    }
}

?>

<!---->
<!-- Comentário -->