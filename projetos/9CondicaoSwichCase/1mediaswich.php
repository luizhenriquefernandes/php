<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Forms Integration</title>
    <link rel="shortcut icon" href="imagens/logo1.ico" type="x-icon">
    <link rel = "stylesheet" href="_css/estilo.css"
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
switch ($media)
{
    case ($media<6):
        echo("Aluno reprovado média: <a style='color: red;font-size: large;font-family: Arial;'>$media insatisfatória</a>");
        break;
    case($media>=6 and $media <8):
        echo("Aluno Aprovado média: <a style='color: #008cff;font-size: large;font-family: Arial;'>$media satisfatória</a>");
        break;
    case($media>=8 and $media <=10):
        echo("Aluno Aprovado média: <a style='color: #0a8100;font-size: large;font-family: Arial;'>$media honra ao mérito</a>");
        break;
    default:
       echo("Erro");}
?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

