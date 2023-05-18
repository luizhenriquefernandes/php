<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>PDO -> CARRO</title>
</head>
<body>
    <div class="container">
        <div class="formularioB">
            <?php
                require_once "./Carro.php";    
                $carroAtual = new Carro();
                $carroAtual->setName($_GET['txtNome']);    
                // print("O carro é {$carroAtual->getName()}");                             
                $carroAtual->status();
                $carroAtual->inserirChave();
                $carroAtual->ligarCarro();
                $carroAtual->retirarChave();
                $carroAtual->desligarCarro();

            ?>
        </div>
    </div>
</body>
</html>


