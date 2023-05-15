<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contagem For</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
<div>
    <?php
    /*
     * Laços de Repetições for com contagens progressiva e regressiva
     * */
    $c = isset($_GET["n"]) ? $_GET["n"] : 0;
    $r = isset($_GET["cont"]) ? $_GET["cont"] : 0;
    echo('<p>Contador Progressivo <br></p>');
    for ($i = 1; $i <= $c; $i++) {
        echo("$i<br/>");
    }
    echo('<p>Contador Regressivo <br></p>');
    // contagem regressiva
    for ($r; $r >= 0; $r--) {
        echo($r . "<br/>");
    }
    ?>
    <a href="1contagemprogressiva.html" class="botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

