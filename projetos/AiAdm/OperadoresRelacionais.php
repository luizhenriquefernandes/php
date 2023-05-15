<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo1.ico" type="x-icon">
</head>
<body>
<div>
<?php
echo"<h1>Operadores relacionais</h1>";
echo"<h2></br>Listas de operadores relacionais&#x1F4CB;:  </h2>";
echo"<br/> <p>Maior = &#36a > &dollar;b
     <br/>Menor = &dollar;a < &dollar;b
     <br/>Maior Igual = &dollar;a >= &dollar;b
     <br/>Menor Igual = &dollar;a <= &dollar;b
     <br/>Diferente = &dollar;a <> &dollar;b ou &dollar;a != &dollar;b
     <br/>Igual = &dollar;a == &dollar;b
     <br/>Idêntico = &dollar;a === &dollar;b
     <br/>Sendo o idêntico uma forma de comparar valor e tipo de variável, se for tudo igual então ela será idêntica &#x1F33A;.
     </br>Operador unário ? seguido de : faz comparações simples. expressão?verdadeiro:falso
     </br>Exemplos:
     </p>";
    $a = 10;
    $b = 5;
    echo"</br>&dollar;a = 10</br>&dollar;b = 5";
    $compara = $a>$b?$a:$b;
    echo"</br>$compara";
    $compara = $a<$b?$a:$b;
    echo"</br>$compara";
    $compara = $a>=$b?$a:$b;
    echo"</br>$compara";
    $compara = $a<=$b?$a:$b;
    echo"</br>$compara";
    $compara = $a<>$b?$a:$b;
    echo"</br>$compara";
    $compara = $a!=$b?$a:$b;
    echo"</br>$compara";
    $compara = $a==$b?$a:$b;
    echo"</br>$compara";
    $compara = $a===$b?$a:$b;
    echo"</br>$compara";

?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

