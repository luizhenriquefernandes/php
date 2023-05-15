<!DOCTYPE html>
<html lang="en, pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo Soma</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>        
        <h1>Cálculo Operacoes Matemáticas</h1>
        <form action="soma.php" method="post">
        <?php
            print('<p><label for="tomatinho">Número 1</label></p>');
            print('<p><input type="number" name="tomatinho" id="numero" step = "0.1"></p><br>');
            print('<p><label for="abobrinha">Número 2</label></p>');
            print('<p><input type="number" name="abobrinha" id="numero" step = "0.1"></p><br>');
            print('<p><input type="submit" value="Calcular"></p><br>');            
        ?>
        </form>
    </div>    
</body>
</html>


