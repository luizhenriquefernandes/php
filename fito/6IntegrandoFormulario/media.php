<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "shortcut icon" href="imagens/logo1.ico" type = "x-icon">
    <link rel = "stylesheet" href="_css/estilo.css">
    <title>Formulario</title>
</head>
<body>
    <div>
        <?php
        $v1 = $_GET["n1"];
        $v2 = $_GET["n2"];
        $v3 = $_GET["n3"];
        $v4 = $_GET["n4"];
        $media =($v1+$v2+$v3+$v4)/4;
        print("A média é {$media}");        
        ?>
    </div>
</body>
</html>