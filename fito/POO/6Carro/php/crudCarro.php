<?php
    require_once "./Carro.php";    
    $carroAtual = new Carro();
    $carroAtual->setName($_GET['txtNome']);    
    print("O carro é {$carroAtual->getName()}");
    $carroAtual->ligarCarro();
?>