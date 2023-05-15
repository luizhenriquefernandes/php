<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Compararação</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo1.ico" type="x-icon">
</head>
<body>
<div>
<?php
$a=3;
$b="3";
$rString = "3";
$rInteger = 3;

/*
 * QUANDO SE TEM DOIS IGUAIS == ELE VAI COMPARAR O VALOR SE ESTÁ IGUAL.
 * QUANDO SE TRES IGUAIS === ELE VAI COMPARAR VALOR E TIPO DE VARIÁVEL
 * */
$r = $a == $b? "SIM" : "NÃO";

echo($r);
$r = $a === $b? "SIM": "NÃO";
echo("<br/>$r");
$rResultado = $rString == $rInteger?"SIM":"NÃO";
$rResultado1 = $rString === $rInteger?"SIM":"NÃO";
echo"<br/>$rString e $rInteger = $rResultado";
echo"<br/>$rString e $rInteger = $rResultado1";

?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->



