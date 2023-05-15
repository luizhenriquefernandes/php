<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Lógicos</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
<div>
    <?php
    echo"<h1>Operadores Lógicos</h1>";
    echo"<p><br/>Condição e and ou &&</p>";
    echo"<p><br/>Condição ou or ou ||</p>";
    echo"<p><br/>Condição ou exclusivo xor</p>";
    echo"<p><br/>Condição não !</p>";
    echo"<p><br/>Exercício ano de nascimento: </p>";
    $anoAtual = $_GET["ano"];
    $anoNascimento = $_GET["nasc"];
    $r = $anoAtual - $anoNascimento;
    echo ("Sua idade é: $r anos e você ".($r >= 18 && $anoNascimento-$anoAtual<=65? "é OBRIGADO a votar":"não tem idade para votar"));
    ?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

