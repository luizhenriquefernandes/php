<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Forms Integration</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel = "stylesheet" href="_css/estilo.css"
</head>

<body>
<form method="get" action="dados.php">
    <!--get para onde os dados serão enviados, mais rápido e menos seguro
        post envio de dados por pacote, mais lento e não é tão seguro assim-->


</form>
<div>
<?php
$valor = $_GET["v"];
echo"Digitou o valor: $valor";
$raiz = pow($valor,1/2);
echo"</br>A raiz de $valor é: ".number_format($raiz,2);

?>
    <a href="_modelformprofluiz.html"></br>Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

