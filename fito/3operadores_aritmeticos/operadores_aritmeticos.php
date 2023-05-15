<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <h1>Operadores Aritméticos</h1>
<?php
echo "Os operadores artiméticos suportados pelo php são: <br>
       + soma, - subtração, * multiplicação, / divisão, % módulo<br>";
$n1 = 3;
$n2 = 7;
$soma = $n1+$n2;
echo "A soma de $n1 com $n2 é = $soma<br>";
$n1 = 7;
$n2 = 5;
$subtracao = $n1-$n2;
echo "A subtração de $n1 com $n2 é = $subtracao<br>";
$n1 = 7;
$n2 = 5;
$mult = $n1*$n2;
echo "A multiplicação de $n1 com $n2 é = $mult<br>";
$n1 = 10;
$n2 = 5;
$div = $n1/$n2;
echo "A divisão de $n1 com $n2 é = $div<br>";
$n1 = 10;
$n2 = 5;
$rdiv = $n1%$n2;
echo "O resto da divisão de de $n1 com $n2 é = $rdiv<br>";
echo"Média: <br>";
$n1 = 7;
$n2 = 5;
$n3 = 10;
$media = ($n1+$n2+$n3)/3;
echo "A média de $n1 + $n2 + $n3 é = $media<br>";
echo"Média:Usando Parâmetros <br>";
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$n3 = $_GET["c"];
echo"<h1>Valores Recebidos: $n1, $n2 e $n3</h1><br>";
$media = ($n1+$n2+$n3)/3;
echo "A média de $n1 + $n2 + $n3 é = $media<br>";

?>
</div>
</body>
</html>

<!---->
<!-- Comentário -->

