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
    <form method="get" action="1funcaosomap2.php">

            <?php
            for ($n = 1; $n <= 2; $n++) {
                echo("valor $n: <input type='number' name='v$n' max='100' min='0' step='0.01' value='0'/><br/> ");
            }
            ?>
        </br><input type="submit" class="botao" value="Calcular"/>
    </form>
</div>
</body>
</html>
 