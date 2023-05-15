<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
<div>
<?php
echo"<h1>Exercício de Cálculo de Média</h1>";
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$nota3 = $_GET["n3"];
$nota4 = $_GET["n4"];
$media = ($nota1+$nota2+$nota3+$nota4)/4;
$r = $media < 6? "Reprovado":"Aprovado";
echo"</br> A média é: ".number_format($media,2)." e você está: $r";

?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

