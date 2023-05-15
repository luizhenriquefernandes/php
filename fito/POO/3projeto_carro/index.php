<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style4.css">
    <title>Classe Bolo</title>
</head>
<body>
    <header></header>
    <main>
        <pre>
            <div>
                <?php
                    require_once 'Bolo.php';
                    $bolo1 = new Bolo();
                    $bolo1 -> inserirMassa();
                    $bolo1 -> untarForma();
                    $bolo1->inserirMassa();
                    $bolo1->limparForma();
                    $bolo1 ->inserirMassa();
                ?>
            </div>
        </pre>
    </main>
    <footer></footer>
    
</body>
</html>
