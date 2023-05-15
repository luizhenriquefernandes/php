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
                <form action = "" method="post">
                <?php
                require_once "Bolo.php";
                $bolo = new Bolo("Bolo de Cenoura","Cenoura","Cenoura com Chocolate", 4.5, 70);
                print("");
                print("<br>Nome {$bolo->getNome()}<br>
                            Tipo {$bolo->getTipo()}<br>
                            Sabor {$bolo->getSabor()}<br>
                            Peso {$bolo->getPeso()}<br>
                            Preço {$bolo->getPreco()}");
                ?>
                <input type='submit' value ='desconto60' name='btnDesconto'>
                <?php 
                
                print("<br>");
                if (isset($_POST['btnDesconto'])) 
                {
                    print("{$bolo->desconto60()}");                    
                }
                print("<br>");
                ?>
                
                </form>
            </div>
        </pre>
    </main>
    <footer></footer>

</body>

</html>