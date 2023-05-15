<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Prof. Luiz henrique</title>
    <link rel="shortcut icon" href="imagens/logo1.ico" type="x-icon">

</head>
<body>
<div>
    <!--Inserir o metodo post para poder extrair o valor do indicador-->
    <form method="post" action="8numeroprimop2.php">


        Número Primo: <select name="primo">
            <?php
            for ($n = 1; $n <= 1000; $n++) {
                echo("<option value = $n> $n </option>");
            }
            ?>
        </select>

        </br><input type="submit" class="botao" value="Calcular"/>
    </form>

</div>
</body>
</html>
 