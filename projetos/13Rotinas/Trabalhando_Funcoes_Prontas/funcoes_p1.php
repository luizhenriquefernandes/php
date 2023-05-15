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
    include "funcoes.php";
    //pode utilizar o comando require "funcoes.php"; a diferença é que o require
    //exige que o arquivo escolhido seja lido e não deixa o programa rodar
    //require_once
    //include_once carregam o programa uma única vez independente de quantas vezes queira incluir
    //essas funções no php.
    echo("<h1>Testando novas funções</h1>");
    ola();
    valor(4);
    echo("<p>Programa finalizado</p>")
    ?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

