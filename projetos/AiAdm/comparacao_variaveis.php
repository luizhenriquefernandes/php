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
$r = $a == $b? "SIM" : "NÃO";
echo($r);
$r = $a === $b? "SIM": "NÃO";
echo("<br/>$r");

?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

