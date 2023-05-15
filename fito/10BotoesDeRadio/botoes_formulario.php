<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botoes com Option Button</title>
    <link rel="shortcut icon" href="imagens/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
<div>    
<pre>
        <form action="botoes_backend.php" method="post">
            <?php
                for ($i=0;$i<10;$i++)
                {
                echo("texto $i <br>");
                echo("<input type = 'text' name = 'v$i'> <br>");
                }
            ?>

        </form>
    </pre>
    </div>

        
</body>
</html>

