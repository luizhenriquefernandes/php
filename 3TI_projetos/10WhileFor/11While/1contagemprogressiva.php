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
    /*
     * Laços de Repetições while com contagens progressiva e regressiva
     * */
    $i = 0;
    $c = isset($_GET["n"])?$_GET["n"]:0;
    $r = isset($_GET["cont"])?$_GET["cont"]:0;
        while ($c <=10) {
            echo("$c<br/>");
            $c++;
        }
        while($i<=10) {
            echo("$i<br/>");
            $i++;
        }
        // contagem regressiva
    while ($r>=0) {
        echo($r . "<br/>");
        $r--;
    }
    ?>
    <a href = "1contagemprogressiva.html" class = "botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

