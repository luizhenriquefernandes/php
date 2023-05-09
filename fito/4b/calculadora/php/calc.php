<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylePhp.css">
    <title>Calculadora</title>
</head>
<body>
    <header></header>
    <section>
        <div class="azul">
            <?php
                $num1 = $_GET['nmbNumero1'];
                $num2 = $_GET['nmbNumero2'];
                $r = $num1 + $num2;
                echo("A soma de {$num1} + {$num2} = {$r}");
            ?>
        </div>
    </section>
    <footer></footer>
    
</body>
</html>