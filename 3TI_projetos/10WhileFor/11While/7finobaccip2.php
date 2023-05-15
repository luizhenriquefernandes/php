<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sequencia de Fibonacci</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
<div>
    <?php
    /*
      Laços de Repetições while com contagens progressiva e regressiva
     * FIBONACCI
     * T1 T2
     * T3 = T1+T2
     * T1 = T2
     * T2 = T3
     *
     * */
    $tabela = isset($_POST["fibonacci"]) ? $_POST["fibonacci"] : 0;
    $n = isset($_GET["v"]) ? $_GET["v"] : 0;
    $t1 = 0;
    $t2 = 1;
    echo("$t1&#x27A1;$t2&#x27A1;");
    $i = 0;
    while ($i < $n - 2 or $i < $tabela - 2) {
        $t3 = $t2 + $t1;
        $t1 = $t2;
        $t2 = $t3;
        echo("$t3&#x27A1;");
        $i++;
    }
    echo("&#x2623;");

    ?>
    <a href="7fibonaccip1.php" class="botao"> Voltar</a>

</div>
</body>
</html>
<!---->
<!-- Comentário -->

