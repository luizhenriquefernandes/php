<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>"VRef"</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
<?php
$a = 3;
$b = $a;
$b += 5;
echo "<br/>O valor de a é: $a e o valor de b é: $b";
$b = 0;
$b = &$a;// valor referenciado
echo"<br/> O valor de b é: $b";
$b += 5;
echo"<br/> O valor de a é: $a e o valor de b é: $b";
?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

