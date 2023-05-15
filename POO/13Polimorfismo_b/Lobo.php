<?php
require_once 'Mamifero.php';
class Lobo extends Mamifero
{
    // fazendo sobreposição
    public function emitirSom()
    {
        //aqui ocorre a sobreposição de método
        //Se não por nada ele ainda continua emitindo som de mamífero
        echo("AAAAAUUUUUUUUUUUU!!!!!!!!!!!!");
    }
}
?>