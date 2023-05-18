<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cálculo de numero primo</title>
</head>

<body>
    <div class="container">
        <div class="formulario3b">
            <?php
            $primo = false;
            $contPrimo = 0;
            $n = $_GET['nmbNumber'];
            for ($i = 1; $i <= $n; $i++) {
                if ($n == 2) {
                    print("{$n} é o único número primo par");
                    echo ("$i");
                    break;
                } elseif ($n % 2 == 0) {
                    print("{$n} é par");
                    break;
                } else {
                    if ($n % $i == 0) {
                        $primo = true;
                        $contPrimo++;
                        if ($contPrimo > 2) {
                            $primo = false;
                            break;
                        }
                    }
                }
            }
                if($primo == true){
                    print("{$n} é primo");
                }
                else if($n == 2){
                    print('');
                }
                else{
                print("<br>{$n} não é primo");
                }

            ?>
        </div>
    </div>

</body>

</html>