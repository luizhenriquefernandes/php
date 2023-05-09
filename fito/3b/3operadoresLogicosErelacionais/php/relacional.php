<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Paula e Quésia</title>
</head>
<body>
    <div class="container">
        <div class="divBody">
            <?php
                $paula = $_GET['rdoPaula'];
                $quesia = $_GET['rdoQuesia'];
                echo("<h1>Operadores Relacionais</h1>");
               
                if($paula == true || $quesia ==true){
                    echo("Oba vou à festa<br>");
                    echo("Porque Paula é {$paula} e Quésia é {$quesia}");
                }
                else {
                    echo("Que peninha não vou à festa<br>");
                    echo("Porque Paula é {$paula} e Quésia é {$quesia}");
                }
            ?>
        </div>
    </div>
</body>
</html>