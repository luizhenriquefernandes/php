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
//$r = $media < 6? "Reprovado":"Aprovado";

/*
if ($media <= 6)
{
    echo ("Aluno reprovado: ".number_format($media,2));
}
else if ($media >=6 && $media <7)
{
   echo("Aluno aprovado regularmente: ".number_format($media,2));
}
else if ($media>=7 && $media <9)
{
    echo("Aluno Aprovado satisfatóriamente: ".number_format($media,2));
}

else
{
    echo("Aluno aprovado com honra ao mérito: ".number_format($media,2));
}
*/
switch ($media)
{
    case ($media < 6):
        echo("Aluno reprovado a média é: ".number_format($media,2));
        break;
    case ($media >=6 and $media <7):
        echo("Aluno aprovado regularmente a média é: ".number_format($media,2));
        break;
    case($media>=7 and $media <=8):
        echo("Aluno aprovado satisfatóriamente a média é: ".number_format($media,2));
        break;
    case ($media >= 9 and $media <10):
        echo("Aluno <a style='color: blue;font-size: large'> Aprovado com honra ao mérito: </a>".number_format($media,2));
        break;
    default:
        echo("Digite um valor válido");
}


?>
    <a href = "Calculo_de_Media.html"> </br> Voltar </a>

</div>

</body>
</html>
<!---->
<!-- Comentário -->

