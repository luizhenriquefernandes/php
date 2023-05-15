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
    <form method="get" action="7finobaccip2.php">
        <?php
            echo("</br>Sequencia: <input type = 'number' name = 'v' max = '100' min = '0' value = '0' step='0.01' /><br/>");
        ?>
    </form>
    <form method="post" action="7finobaccip2.php">
        <select name="fibonacci">
        <?php
        $n1 = 1;
        while($n1<=100){
            echo("<option value = '$n1'>$n1</option>");
            $n1++;
        }
        ?>
        </select>
        </br><input type = "submit" class = "botao" value = "Calcular"/>
    </form>
</div>
</body>
</html>
 