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
    <form method="get" action="2funcoesString_p1.php">
        <?php
        echo("</br>Produto: <input type = 'text' name = 'produto' = 'produto' /><br/>");
        echo("</br>Preço: <input type = 'number' name = 'preco' max = '100' min = '0' value = '0' step='0.01' /><br/>");
        echo("</br>Texto: <input type = 'text' name = 'palavra' = 'texto' max = '1000' min = '0' value = '0'  /><br/>");
        echo("</br>nome: <input type = 'text' name = 'nome' = 'nome' /><br/>");


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
 