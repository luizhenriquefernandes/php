<!DOCTYPE html>
<html lang= pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Imc</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="headerP">
            <h1>Calculadora IMC</h1>
        </div>            
            <div class="rowPhp">
                <?php 
                    $aPeso = isset($_POST['nmbPeso'])?$_POST['nmbPeso']:'erro';
                    $bAltura = isset($_POST['nmbAltura'])?$_POST['nmbAltura']:'erro';
                    $imc = $aPeso /(pow($bAltura,2));
                    echo("<p>O imc é {$imc}</p>");                    
                ?>
            
            </div>
    </div>
    
</body>
</html>