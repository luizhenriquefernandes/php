<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo do While</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
<div>
    <?php
    $n = isset($_GET["valor"])?$_GET["valor"]:0;
    $n1 = isset($_GET["valor1"])?$_GET["valor1"]:0;
    for($i=0;$i<$n;$i++){
        echo($i);
    }


    ?>
   <br/><a href="1whileparte1.php" class="botao"> Voltar</a>

</div>
</body>
</html>
<!---->
<!-- Comentário -->

