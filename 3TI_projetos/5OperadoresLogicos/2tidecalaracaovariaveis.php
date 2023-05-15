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
    echo"</br> Funções ternárias (expressão1 > expressão2)?'true':'false'";

    $anoNascimento = $_GET["idade"];
    $r = date("Y") - $anoNascimento;
    echo ("</br>Sua idade é: $r anos e você ".($r >= 18 && $r<=65? "é OBRIGADO a votar":"não tem idade para votar"));
    ?>
</div>
</body>
</html>
