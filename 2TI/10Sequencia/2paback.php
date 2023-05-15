<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>BackEnd</title>
</head>

<body>
    <div>
    <?php
    $termoTotal = isset($_POST["t1"])?$_POST["t1"]:0;
    $termoInicial = isset($_POST["t2"])?$_POST["t2"]:0;
    
    $razao = isset ($_POST["r"])?$_POST["r"]:0;
       
    $pa = $termoInicial;
    print("PA = $pa&#x27A1;");
    for ($i=1;$i<$termoTotal; $i++)
    {

        $pa += $razao; 
        print("$pa&#x27A1;");           
    }
        print("fim");  
         
    ?>
    <br>
    <a href="1paindex.php" class = "botao" value = "voltar">Voltar</a>
    </div>
    
</body>
</html>
