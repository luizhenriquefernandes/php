
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Soma</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <header></header>
    <main>
        <?php
        $a = $_GET['v1'];   
        $b = $_GET['v2'];
        $r = $a+$b;        
        echo("<p>A soma de {$a} + {$b} = {$r}</p><br>"); 
        $r= $a-$b;
        print("<p>A subtração de {$a} - {$b} = {$r}</p><br>"); 
        $r = Pow($a,2);
        print("<p>A exponenciação quadratica de {$a}² = {$r}</p><br>");
        $r = Pow($a,1/2);
        print("<p>A raiz quadrada de {$a} é {$r}</p>");


        
        ?>
    </main>
    <footer></footer>
</body>
</html>


