<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/style4.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP POO - Prof. Luiz henrique</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
            <div>

                <form>
                    <?php
                    require_once 'ControleRemoto.php';
                    $c = new ControleRemoto();
                    $c->ligar();
                    $c->abrirMenu();
                    ?>

                    </br><input type = "submit" class = "botao" value = "Enviar"/>
                </form>


            </div>
        </pre>
</body>
</html>
 