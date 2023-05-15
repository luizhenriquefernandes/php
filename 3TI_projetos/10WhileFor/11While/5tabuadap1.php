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
    <form method="post"action="5tabuadap2.php">
    <form method="get" action="5tabuadap2.php">


        Tabuada: <select name ="Tabuada">
        <?php

        $n = 1;
        while ($n<=10) {

            echo("<option value = $n> $n </option>");
            $n++;
        }
        ?>
         </select>

        </br><input type = "submit" class = "botao" value = "Calcular"/>
        </form>

</div>
</body>
</html>
 