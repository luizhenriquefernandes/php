<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Declaração de Variáveis</title>
    <link rel= "stylesheet" href = "_css/estilo.css">
</head>
<body>
<div>
<?php
/*
 fAgora dentro da supertag <?php  ?> iremos declarar a variável no php
para se declarar variáveis Ex.: $nome = "Giovanna";
*/
$nome = $_GET["nome"];
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$soma = $num1+$num2;
$ternario = $soma < 5 ? "Menor que 5":"Maior que 5";
$subtracao = $num1 - $num2;
$multiplicao= $num1 * $num2;
$divisao = $num1 / $num2;
$exponenciacao = pow($num1,$num2);
$raizQuadrada = pow($num1,1/2);
$raizCubica = pow($num1,1/3);
$restoDiv = $num1%$num2;

echo "<h1>Nome: $nome </h1>";
echo "<br>A soma de $num1 e $num2 é = $soma e é: $ternario";
echo"<br/>A subtração de $num1 e $num2 é $subtracao";
echo"<br/>A multiplicação de $num1 e $num2 é $multiplicao";
echo"<br/>A divisao de $num1 e $num2 é ".number_format($divisao,2);
echo"<br/>A exponenciação de $num1<sup>$num2</sup> é $exponenciacao";
echo"<br/>A raiz quadrada de $num1 é ".number_format($raizQuadrada,2);
echo"<br/>A raiz cúbica de $num1 é ".number_format($raizCubica,2);
echo"<br/>O resto da divisão de $num1 e $num2 é $restoDiv";


?>
</div>
</body>
</html>
<!--TENTEM FAZER COM AS SEGUINTES OPERAÇÕES
SOMA
SUBTRAÇÃO
MULTIPLICAÇÃO
DIVISÃO
EXPONENCIAÇÃO
RAIZ QUADRADA E CÚBICA POW OU SQRT
RESTO DA DIVISÃO %-->
VALOR ABSOLUTO ABS
<!-- Comentário -->

