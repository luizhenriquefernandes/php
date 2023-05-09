<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style2.css">
    <title>Cálculo</title>
</head>
<body>
    <header></header>
    <section>
        <div class = "container">
            <?php
                $num1= $_GET['nmbNumber1'];
                $num2= $_GET['nmbNumber2'];
                $soma= $num1+$num2;
                echo("A soma é = {$soma}<br>");
                if($soma<6){
                    echo("REPROVADO<br>");
                }else{
                    echo("APROVADO<br>");
                }
            ?>
        </div>
    </section>
    <footer></footer>
</body>
</html>