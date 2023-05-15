<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Helow World</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="short cut icon" href="imagens/logo3.ico">
</head>
<body>
<div>
<?php
echo "<h1>HELLOW WORLD</h1>";
$nome = "Contando";
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$s = $n1 + $n2;
echo"</br> $nome";
echo"</br> A soma de $n1 + $n2 = $s";
$s = $n1 - $n2;
echo"</br>A subtração de $n1 - $n2 = $s";
$s = pow($n1,$n2);
echo"</br>A exponenciação de $n1 <sup>$n2</sup> = $s";
?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

