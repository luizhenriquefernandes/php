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
     * Fazer um programa que  leia os dias  da semana de 2 - 7  e mostrar se
     * precisa ir à escola ou não.
     * Fazer um grupamento de cases.
     * O PHP Isset é um função nativa do  PHP que  serve para  saber se uma
     * variável está definida. Ela basicamente verifica a existência de uma
     * variável, e assim, retorna um valor booleano  (true se for verdadeiro,
     * e false se for falso).
     * */
        $semana = isset($_GET["diaSem"])?$_GET["diaSem"]:"0";
        switch($semana)
        {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Vamos para a escola";
                break;
            case 7:
            case 1:
                echo "Sabadera!!!! e Dominguera!!!!";
                break;
            default:
                echo"Digite uma opção válida";
        }
    ?>
        <br/><a href = "javascript:history.go(-1)" class = "botao">Voltar</a>
    <!--history.go(-1) significa volte uma página no meu histórico de navagação,
    ou seja, volte para a página anterior-->


</div>
</body>
</html>
<!---->
<!-- Comentário -->

