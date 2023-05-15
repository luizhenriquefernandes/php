<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Forms Integration</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel = "stylesheet" href="_css/estilo.css">

</head>
<body>
<div>
    <?php
    $fatorial = isset($_GET["a"])?$fatorial = $_GET["a"]:1;
    echo("<h1>Calculando o Fatorial de $fatorial</h1>");
    $f = $fatorial;
    $c = 1;


    //5.4.3.2.1
        do{
            $c = $c * $f;
            $f--;
        }
    while($f>=1);
    echo("<h1>O fatorial de $fatorial é $c <h1/></br>");

    ?>
    <a href = "4fatorialp1.php" class = "botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

