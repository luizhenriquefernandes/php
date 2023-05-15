<?php

class PlantaConstructComplexo
{
    public $tipo;
    private $ovario;
    private $tamanho;
    private $embalada;

    //criando métodos construtores para criar é necessário ter 2 underlines __
    //public function __construct()
        /*Pode declarar a função também igual ao java
    *public funtion Planta(){}*/
    /**
     * @param $tipo
     * @param $ovario
     * @param $tamanho
     * @param $embalada
     */
    public function __construct($tipo, $ovario, $tamanho)
    {
        $this->tipo = $tipo;
        $this->ovario = $ovario;
        $this->tamanho = $tamanho;
        $this->embalada = true;
    }


    /** alt insert getter and setter
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getOvario()
    {
        return $this->ovario;
    }

    /**
     * @param mixed $ovario
     */
    public function setOvario($ovario)
    {
        $this->ovario = $ovario;
    }

    /**
     * @return mixed
     */
    public function getTamanho()
    {
        return $this->tamanho;
    }

    /**
     * @param mixed $tamanho
     */
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    /**
     * @return mixed
     */
    public function getEmbalada()
    {
        return $this->embalada;
    }

    /**
     * @param mixed $embalada
     */
    public function setEmbalada($embalada)
    {
        $this->embalada = $embalada;
    }

}