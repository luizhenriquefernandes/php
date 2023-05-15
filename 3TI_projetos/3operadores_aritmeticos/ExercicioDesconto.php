<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desconto</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
<?php
echo "Exercício Aplicar 10% de desconto ao preço de um produto";
$preco = $_GET["a"];
echo "<br>O preço do produto é $preco";
$aumento = $preco + ($preco*10)/100;
$preco -= ($preco*10)/100;
echo "<br> O valor com 10% de desconto é: R$".number_format($preco,2,",",".");
echo "<br> O valor com 10% de aumento é: R$".number_format($aumento,2,",",".");

?>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

