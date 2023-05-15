<!DOCTYPE html language>
<html lang="en-US,pt-BR">
<head>
    <meta charset = "utf-8">
    <title>Declarando Variáveis Com Input</title>
    <link rel = "stylesheet" href = "_css/estilo.css">
</head>
    <body>
        <div>
            <?php 
            use Vtiful\Kernel\Format;
                echo("<h1>Declarando Variáveis</h1>");
                print("<p>Aula sobre declaração de variáveis</p>");
                $x = $_GET["a"];
                print("<p>O valor de x é = {$x}</p>");
                $y = $_GET["b"];
                print("<p>O valor de y é = {$y}</p>");
                $r = $x+$y;
                echo("<p>A soma de x + y é = {$r}</p>");            
            ?>
        </div>
    </body>
</html>
