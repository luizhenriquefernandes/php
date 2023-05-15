
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Polimorfismo-B</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='_css/style4.css'>
    <script src='main.js'></script>
</head>
<body>
    <pre>
        <div>
            <?php
                require_once 'Mamifero.php';
                require_once 'Lobo.php';
                require_once 'Cachorro.php';
                $c = new Mamifero();
                echo("<h1>{$c -> emitirSom()}</h1>");
                print_r($c);

                $lobo = new Lobo();
                echo("<h1>{$lobo -> emitirSom()}</h1>");
                print_r($lobo);
                $cachorro = new Cachorro();
                echo("<h1>{$cachorro ->emitirSom()}</h1>");
                $cachorro->reagirFrase("Toma Comida");
                $cachorro->reagirDono(true);
                $cachorro->reagirHoraSom(11,35);
                $cachorro->reagirIdadePeso(11,13);
                print_r($cachorro);
            ?>
        </div>
    </pre>
    
</body>
</html>