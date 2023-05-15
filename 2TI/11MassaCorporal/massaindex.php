<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/estilo1.css">
    <title>Cálculo de Massa Corporal</title>
</head>
<body>
    <header></header>
    <main>
     
         <form action="massaback.php" method="post">
            <div>

            </div>
            <div>

            </div>
            <div>
                
            </div>
            
            <?php
                print('<p>peso: <input type = "number" name = "v1" step = "0.01" </p><br>');
                print('<p>atura: <input type = "number" name = "v2" step = "0.01" max = "3"</p><br>');           
                print('<p><input type = "submit" class = "botao" vaule = "Calcular"></p><br>');
                                
            ?>
            </form>
     
    </main>
    <footer></footer>
</body>
</html>