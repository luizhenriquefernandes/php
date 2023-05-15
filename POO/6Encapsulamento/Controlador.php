<?php

    Interface Controlador
    /*Não precisa explicitar que abstract porque na interface já é configurada para se abstract
     * agora se é uma classe abstrata neste caso public abstract function foo();
     * */
{
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
    }
?>