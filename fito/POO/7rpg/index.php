<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FICHA</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./image/scythe.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Ficha RPG</h1>
        <div class="centralDiv">
            <div class="formHell">                
                 
                            
                <?php
                // Verifica se o formulário foi submetido
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Verifica se o valor A foi confirmado
                    if (isset($_POST["confirmar"]) && $_POST["confirmar"] == "A") {
                        echo ("header['location: produto-lista.php'];");
                    }
                }
                ?>

                <!-- Formulário com o botão de confirmação -->
                <form class = "hellPost" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <input type="hidden" name="confirmar" value="A">
                    <input type="submit" value="Confirmar">
                </form>
                        
                   
            </div>            
        </div>
    </div>
</body>
</html>