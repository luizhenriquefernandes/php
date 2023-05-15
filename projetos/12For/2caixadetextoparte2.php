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
    //gerador de variáveis num1,num2,num3,num4,num5 via url
    $i = 1;
    while ($i <= 5){
        //cria variavel $v e insere num1
        $v = "num".$i;
        //cria variável $url e insere o valor de v1
        $url = "v".$i;
        //variável da variável $v que já é num vai pegar o valor de v1 na variável url
        $$v = isset($_GET[$url])?$_GET[$url]:0;

        $i++;
    }
    //mostrar os valores gerados nas caixas de textos
   $i = 1;
    while ($i <= 5){
        $v = "num".$i;
        echo("Valor $i: ".$$v."<br/>");

        $i++;
    }
    ?>
    <a href = "2caixadetexto.php" class = "botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

