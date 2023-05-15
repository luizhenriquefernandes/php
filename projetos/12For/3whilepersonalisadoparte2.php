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
    $a = $_GET["v1"];
    $b = $_GET["v2"];
    $c = $_GET["incremento"];
    if($a<$b){
        while($a<=$b){
            echo("$a ");
            $a+=$c;
        }
    }
    else{
        while($a>=$b){
            echo("$a ");
            $a-=$c;
        }
    }
    echo"<br/>";
    ?>
    <a href = "3whilepersonalisado.php" class = "botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

