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

    for($i = 1;$i<=10;$i++){
        //trabalhando com metodo _POST na p1 inserir o metodo _POST
        $url = $_POST["Tabuada"];
        $r = $url * $i;
        echo("$url x $i = $r<br/>");
    }
    ?>
    <br/>

    <a href = "javascript: history.go(-1)" class="botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

