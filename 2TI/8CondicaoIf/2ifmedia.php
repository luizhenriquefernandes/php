<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Forms Integration</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel = "stylesheet" href="_css/estilo.css">

</head>
<body>
<div>
<?php

$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$nota3 = $_GET["n3"];
$nota4 = $_GET["n4"];

$media = ($nota1+$nota2+$nota3+$nota4)/4;
$media = number_format($media,2);
if($media < 6)
{
    echo ("Aluno reprovado média: <a style='color: red;font-size: large;font-family: 'Arial Black''> Insatisfatório $media </a>");
}
elseif ($media >=6 and $media <8)
{
    echo("Aluno Aprovado Bom: $media");
}
else
{
    echo("Aluno Aprovado Excelente: $media");
}
?>
    <br/><a javascript history.go(-1) href="2ifmedia.html" >voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

