<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>"Ano Atual"</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <header></header>
    <main>
    <div>
    
        <?php
        print("<h1>Seja bem Vindo</h1>");       
        echo("<h1>Ano atual</h1>");
        $anoAtual = $_GET["ano"];//?ano=2022
        /*
        Existe o pré e pós incremento e decremento basta utilizar antes da variável
        se usar depois primeiro usará a variável e depois será realizada a operação.
        */
        echo "O ano atual é: $anoAtual<br>O ano anterior é: ".--$anoAtual."mais alguma coisa";
        
        echo("<p>O ano Atual é: {$anoAtual} <br> O ano anterior é</p>".--$anoAtual);
        ?>
        </div>
    </main>
    <footer></footer>

</body>
</html>
<!---->
<!-- Comentário -->

