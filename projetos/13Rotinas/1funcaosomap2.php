<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Função Soma</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
<div>
    <?php
    for ($i = 1; $i <= 2; $i++) {
        $v = "num" . $i;
        $url = "v" . $i;
        $$v = isset($_GET["$url"]) ? $_GET["$url"] : 0;
    }
    $c = $_GET["v1"];
    $d = $_GET["v2"];

    function soma($c, $d)
    {
        $s = $c + $d;
        echo("</br> A soma é $s");
    }
    for ($i = 1; $i <= 2; $i++) {
        $v = "num" . $i;
        echo("</br>valor $i: " . $$v . "<br/>");

        //echo("valor $i: " . $$v . "<br/");
    }
    soma($c, $d);
    ?>
    <br/>
    <br/>
    <a href="javascript: history.go(-1)" class="botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

