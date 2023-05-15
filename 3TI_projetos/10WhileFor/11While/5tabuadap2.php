<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada com Opcao Select</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel = "stylesheet" href="_css/estilo.css">

</head>
<body>
<div>

    <?php
    /*
     * Laços de Repetições while com contagens progressiva e regressiva
     *
     * */



    $tab = $_POST["Tabuada"];
    echo("<h1>Mostrando a Tabuada do $tab</h1>");
    $i = 1;
    do{
        //trabalhando com metodo _POST na p1 inserir o metodo _POST
        $url = $_POST["Tabuada"];
        $r = $url * $i;
        echo("$url x $i = $r<br/>");
        $i++;
    }while ($i<=10);
    ?>
    <br/>

    <a href = "5tabuadap1.php" class = "botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

