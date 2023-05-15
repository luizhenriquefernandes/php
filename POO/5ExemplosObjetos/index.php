<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/style4.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP POO - Prof. Luiz henrique</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
    <pre>
            <div>

                <form>
                    <?php
                    require_once 'ContaBanco.php';
                        print("<h1 class='formatadoCentro'>Abertura de Conta</h1><br>");
                        $c1 = new ContaBanco(); //tadeu
                        $c2 = new ContaBanco(); //divina
                        $c1->abrirConta("cc");
                        $c1->setNumConta(1234);
                        $c1->setCliente("Tadeu Todinho");
                        $c1->depositar(350);
                        $c1->depositar(200);
                        $c2->setNumConta(4321);
                        $c2->abrirConta("cp");
                        $c2->setCliente("Divina");
                        $c2->depositar(500);
                        $c2->sacar(100);
                        print_r($c1);
                        print_r($c2);



                    ?>

                    </br><input type = "submit" class = "botao" value = "Enviar"/>
                </form>


            </div>
        </pre>
</body>
</html>
 