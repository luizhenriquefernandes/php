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
        $regiaoBrasil = isset($_GET["regiao"])?$_GET["regiao"]:"0";
        switch($regiaoBrasil)
        {
            case 1:
            case 3:
            case 4:
            case 14:
            case 21:
            case 22:
            case 26:
                echo "<span class = 'foco'>Região Norte</span>";
                break;
            case 2:
            case 5:
            case 6:
            case 10:
            case 17:
            case 19:
            case 15:
            case 16:
            case 25:
                echo "<span class = 'foco'>Região Nordeste</span>";
                break;
            case 9:
            case 12:
            case 11:
            case 7:

                echo"<span class = 'foco'>Região Central</span>";
                break;
            case 8:
            case 13:
            case 18:
            echo"<span class = 'foco'>Região Sudeste</span>";
            break;
            case 24:
                echo"<span class = 'foco'>Região Sudeste </br> Região do Sandrola 
                    </br> Tráfico de ironias</span>";
                break;
            case 27:
            case 23:
            case 20:
                echo"<span class = 'foco'>Região Sul</span>";
                break;
            default:
                echo"Digite uma opção válida";
        }
    ?>
        <br/><br/><a href = "javascript:history.go(-1)" class = "botao">Voltar</a>
    <!--history.go(-1) significa volte uma página no meu histórico de navagação,
    ou seja, volte para a página anterior-->


</div>
</body>
</html>
<!---->
<!-- Comentário -->

