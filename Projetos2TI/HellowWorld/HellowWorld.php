<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Hellow World</title>
</head>
<body>
<?php
$nome = "Hellow World";
echo "<h1>$nome</h1>";
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$resultado = $n1 + $n2;
echo"A soma de $n1 + $n2 é: $resultado";
$resultado = $n1-$n2;
echo"</br>A subtração de $n1 - $n2 é: $resultado";
$resultado = pow($n1,$n2);
echo"</br>A exponenciação de $n1 Elevado $n2 é: $resultado";


?>
</body>
</html>
<!---->
<!-- Comentário -->

