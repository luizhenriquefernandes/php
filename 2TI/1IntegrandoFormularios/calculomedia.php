<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Calculo de Média</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo1.ico">    
</head>
<body>
    <div>
    <form method="get" action="formulariomedia.html">
    
        <?php
            $n1 = $_GET["v1"];
            $n2 = $_GET["v2"];
            $n3 = $_GET["v3"];
            $n4 = $_GET["v4"];
            $media =($n1+$n2+$n3+$n4)/4;
            print("<p>A média é {$media}</p>");        
        ?>
    </div>
    <input type = "submit" value="Voltar" href="formulariomedia.html"/>
    
</body>
</html>