<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
    <title>Verificacao</title>
</head>
<body>
    <div>
        <?php        
        $valor = isset($_GET['n1'])?$_GET['n1']:0;
        if ($valor == 0){
        echo('Valor inválido');
    }    
        ?>
    </div>
    
</body>
</html>