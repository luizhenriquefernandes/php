<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>3 TI Média</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
<?php
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$nota3 = $_GET["n3"];
$nota4 = $_GET["n4"];
$resultado = ($nota1+$nota2+$nota3+$nota4)/4;
$resultado = number_format($resultado,2);
$resultado1 = ($resultado<6)?"Reprovado":"Aprovado";
echo("A média das notas é: $resultado e Você está $resultado1");
?>
</body>
</html>
<!---->
<!-- Comentário -->

