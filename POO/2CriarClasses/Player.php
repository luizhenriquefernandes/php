<?php

class Player
{
    var $classe;
    var $raca;
    var $altura;
    var $forca;
    var $sabedora;
    var $carisma;
    var $constituicao;
    var $destreza;
    var $pontosVida;
    // metodos
    function status(){
        $this -> classe = "Bardo";
        $this -> raca = "Humano";
        $this -> forca = "18";
        print("A Classe é: {$this -> classe}<br>");
        print("A Raca é: {$this -> raca}<br>");
        print("A Forca é: {$this -> forca}<br>");
    }
}