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
    <form method="get" action="2caixadetextoparte2.php">

        <?php
        $n = 1;
        while ($n<=5) {
            echo("Valor $n: <input type = 'number' name = 'v$n' max = '100' min = '0' value = '0' /><br/>");
            $n++;
        }

        ?>
        </br><input type = "submit" class = "botao" value = "Enviar"/>
        </form>

</div>
</body>
</html>
 