<?php
require_once 'Lobo.php';
class Cachorro extends Lobo
{
    public function emitirSom()
    {
        //este método simplesmente sobrepõe o do lobo
        echo("<p>Au Au Au</p>");
    }
    //agora na sobreposição não pode se inserir explicitamente no php
    //em outras linguagens á mais fácil. No php usamos métodos diferentes.
    //exemplo se inserir método reagir ele não reconhece
    //a melhor estratégia é utilizar nomes diferentes para diferentes métodos.
    public function reagirFrase($frase)
    {
        if ($frase == "Toma Comida"||$frase == "ola")
        {
            echo("<p>Abanar e Latir</p>");
        }
        else
        {
            echo("<p>rosnar</p>");
        }
        
    }
    public function reagirHoraSom ($hora,$min)
    {
        if ($hora<12)
        {
            echo("<p>Abanar e Latir</p>");
        }
        else if($hora >= 18)
        {
            echo("<p>ignorar</p>");
        }
        else
        {
            echo("<p>abanar e latir</p>");
        }
    }
    public function reagirDono ($dono)
    {
        if($dono)
        {
            echo("<p>Abanar</p>");
        }
        else
        {
            echo("<p>Rosnar e Latir</p>");
        }
    }
    public function reagirIdadePeso($idade, $peso)
{
    if ($peso<5)
        {
            echo("<p>Abanar</p>");        
         if($peso >= 18)
        {
            echo("<p>latir</p>");
        }
        else
        {
            echo("<p>ignorar</p>");
        }
    
    }
    else
    {
        if($peso < 10)
        {
            echo("<p>rodopiar</p>");
        }
        else
        {
            echo("<p>lamber</p>");
        }   
    }

}
//NOTA Este método é similiar oa de sobrecarga e é mais fácil do que ficar 
//fazendo parâmetros desnecessários.
}