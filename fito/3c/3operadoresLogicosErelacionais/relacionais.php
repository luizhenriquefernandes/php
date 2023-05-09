<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>
    <?php
        echo("<h1>Operadores Lógicos</h1>");
        $paula = true;     
        $quesia = true;
        if(!$paula == !true &&  $quesia == true){
            echo("Vou à festa com a Paula ou a Quésia<br>");
            echo("Porque Paula é {$paula} e a Quésia {$quesia}");
        }else{

            echo("Não vou à festa com a Paula ou a Quésia<br>");
            echo("Porque Paula é {$paula} e a Quésia {$quesia}");
        }


    ?>
</body>
</html>