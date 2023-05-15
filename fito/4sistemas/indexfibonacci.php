<!DOCTYPE html>
<html lang="en, pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo3.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>fibonacci</title>
</head>
<body>
    <header></header>
    <main>
        <form action="fibonacciback.php" method="post">
            <div>
        <?php
            print('<p>Termo: <input type = "number" name = "n1" step = "0.1" min = 0 max = 100 ></p><br>');
        ?>
        <select name="tabela">
            
            <?php
                for($i=1;$i<=100;$i++)
                {
                    print('<input type = "option" name = "v$i" value = "$i">');
                }
            ?>
        </select>
        </div>
        </form>
    </main>

    <footer></footer>
    
</body>
</html>