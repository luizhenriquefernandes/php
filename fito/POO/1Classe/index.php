<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo3.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/style4.css">
    <title>POO Orientação a Objeto</title>
</head>
<body>
    <pre>
        <div>
            <?php
                require_once "Caneta.php";
                $canetaAzul = new Caneta();
                $canetaAzul ->setModelo("Esferografica");
                $canetaAzul ->setMarca("Bic");
                $canetaAzul ->setCor("Azul");
                $canetaAzul ->setEspessura(0.5);
                print("<br>");
                print("O modelo é {$canetaAzul->getModelo()}<br>");
                print("A marca é {$canetaAzul->getMarca()}<br>");
                print("A cor é {$canetaAzul->getCor()}<br>");
                print("A espessura é {$canetaAzul->getEspessura()}<br>");
                print("Objeto2<br>");
                $canetaVermelha = new Caneta();
                $canetaVermelha ->setModelo("Tinteiro");
                $canetaVermelha ->getMarca("Faber Castall");
                $canetaVermelha ->setCor("Vermelha");
                $canetaVermelha ->setEspessura(0.3);
                print("O modelo é {$canetaVermelha->getModelo()}<br>");
                print("A marca é {$canetaVermelha->getMarca()}<br>");
                print("A cor é {$canetaVermelha->getCor()}<br>");
                print("A espessura é {$canetaVermelha->getEspessura()}<br>");
                $canetaAzul -> escrever();
                $canetaAzul -> tampar();
                $canetaAzul ->escrever();
                $canetaAzul->destampar();
                $canetaAzul ->escrever();
                                     
            ?>
        </div>

    </pre>

    
</body>
</html>