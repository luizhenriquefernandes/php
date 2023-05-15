<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Prof. Luiz henrique</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
<div>
    <form method="get" action="funcoes_p1.php">
        <?php
        $n = 1;

        while ($n<=4) {
            echo("</br>Valor$n: <input type = 'number' name = 'v$n' max = '100' min = '0' value = '0' step='0.01' /><br/>");
            $n++;
        }


        ?>

        </br><input type = "submit" class = "botao" value = "Enviar"/>
    </form>


</div>
</body>
</html>
 