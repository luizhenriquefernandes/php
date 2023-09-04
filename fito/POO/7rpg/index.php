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
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    // Verifica se o valor A foi confirmado
                    if (isset($_GET["confirmar"]) && $_GET["confirmar"] == "Cadastro") {                       
                        header("Location: ./php/cadastro.php");
                    }
                    else if (isset($_GET["confirmar"]) && $_GET["confirmar"] == "Consulta") {                       
                        header("Location: ./php/personagem.php");
                    }
                }
                ?>
                <!-- Formulário com o botão de confirmação -->
                <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <input class = "btnForm"type="hidden" name="confirmar" value="Cadastro">
                    <input class = "btnForm"type="submit" value="Cadastro">
                </form>
                <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <input class = "btnForm"type="hidden" name="confirmar" value="Consulta">
                    <input class = "btnForm"type="submit" value="Consulta">
                </form>
            </div>            
        </div>
    </div>
</body>
</html>