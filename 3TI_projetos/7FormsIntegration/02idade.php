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
/*
Nota!!
Se abrir diretamente o arquivo em php ele derá um erro, para corrigir isso é necessário utilizar o operador ternário.
$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Informado]";
$ano = isset($_GET["ano"])?$_GET["ano"]:0;
$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem Sexo]";
*/
$nome = $_GET["nome"];
$ano = $_GET["ano"];
$sexo = $_GET["sexo"];
$idade = date("Y")-$ano;
echo"$nome tem $idade anos de idade e é $sexo";
?>
    <a href="_formulario_idade.html"></br>Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

