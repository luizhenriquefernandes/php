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
$n1 = $_GET["v1"];
$n2 = $_GET["v2"];
$n3 = $_GET["v3"];
$n4 = $_GET["v4"];
$media = ($n1+$n2+$n3+$n4)/4;
print("<p>A media é {$media}</p>");
if ($media<6)
{
    print("<p>Reprovado</p>");
}
elseif ($media>= 6 && $media <7)
{
    print("<p>Aprovado Regular</p>");
}
elseif ($media>=8 && $media<9)
{
    print("<p>Aprovado com Bom</p>");
}
elseif ($media>=9 && $media<=10)
{
    print("<p>Aprovado com Muito bom Bom</p>");
}
else
{
    print("<p>Digite uma opção válida</p>");
}
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

<!-- Comentário -->

