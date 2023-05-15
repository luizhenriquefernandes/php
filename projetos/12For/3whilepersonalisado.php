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
    <form method="get" action="3whilepersonalisadoparte2.php">
        Início: <input type = 'number' name = "v1" max = "100" min = "0"value = "0"/><br/>
        Final : <input type = 'number' name = "v2" max = "100" min = "0"value = "0"/><br/>
        Incremento: <select name ="incremento">
        <?php

        $n = 1;
        while ($n<=5) {

            echo("<option value = '$n'> $n </option>");
            $n++;
        }
        ?>
         </select>

        </br><input type = "submit" class = "botao" value = "Calcular"/>
        </form>

</div>
</body>
</html>
 