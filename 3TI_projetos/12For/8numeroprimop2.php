<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Número Primo</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
<div>

    <?php
    /*
     * Laços de Repetições while com contagens progressiva e regressiva
     *
     * */

    $r = 0;
    $nPrimo = isset($_POST["primo"]) ? $_POST["primo"] : 1;
    echo("<h1>Escolhendo o número $nPrimo</h1>");
    for ($i = 1; $i <= $nPrimo; $i++) {
        // primo só pode ser divisível 2 vezes.
        $a = $nPrimo % $i;
        if ($a == 0) {
            echo("<a style='color: #ff0009;font-size: larger'>$i </a>");
            $r++;
        } else {
            echo("<a style='color: #004fff;font-size: larger'>$i </a>");
        }

    }
    echo("<br/>");
    if ($nPrimo == 1){
        echo("<br/><a style='color: darkgreen;font-size: larger'>$nPrimo é primo</a><br/>");
    }
    else if ($r == 2) {
        echo("<br/><a style='color: darkgreen;font-size: larger'>$nPrimo é primo</a><br/>");
    } else {
        echo("<br/><a style='color: #370064;font-size: larger'>$nPrimo Não é primo</a><br/>");
    }
    ?>
    <br/>
    <br/>
    <a href="javascript: history.go(-1)" class="botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

