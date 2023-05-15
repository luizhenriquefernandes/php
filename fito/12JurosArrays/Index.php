<!DOCTYPE html>
<html lang="en, pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Arrays</title>
</head>
<body>
    <header></header>
    <main>
    <div>
        <form action="ArrayNumero.php" method="post">
        <pre>
        <?php
        for($i = 0; $i < 5; $i++)
        {
            print("<label for='n'$i>Nota $i</label>");
            print("<input type='number' name='n$i' id='0'><br>");
        }
           
          
          print("<input type='submit' value='Calcular'>");
        ?>
        </pre>
        
        </form>
        </div>
    </main>
    <footer></footer>''    
</body>
</html>