<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero
{
    public function emitirSom()
    {
        print("<p>Ladrando</p>");
    }
}
