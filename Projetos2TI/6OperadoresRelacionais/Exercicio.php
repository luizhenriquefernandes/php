<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="imagens/logo1.ico" type="x-icon">
</head>
<body>
<div>
<?php
echo"<h1>Permitir que o usuário escolha entre somar e multiplicar</h1>";
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$res = $n1 > $n2  ? $n1+$n2 : "&dollar;n1 < &dollar;n2 a Multiplicação é: $n1 * $n2 = ".$n1*$n2;
$tipo = $_GET["op"];
echo("</br>$res");
$r = $tipo == "s"? $n1-$n2:pow($n1,$n2);
echo("</br>Resultado de r = $r");

?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

