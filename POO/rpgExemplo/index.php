<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Combate</title>
    <link rel="shortcut icon" href="imagens/logo1.ico" type="x-icon"/>
    <link rel="stylesheet" href="_css/style4.css"/>

</head>
<body>
<h1 class = "formatadoCentro">Projeto Clube da Luta</h1>
<pre>

    <div>


        <form>


            <?php
                require_once 'Player.php';
                $p1 = new Player;
                $p1 ->setNome("Noturno");
                $p1 -> setForca(20);
                $p1 -> setDestreza(17);               
                $p1->setVida(20);
                $p1->setCategoriaArmadura(14);
                $p1->ganharCategoria();
                $p1->ganharCategoria();
                $p1->setSabdoria
                $p1->soco();
                print_r($p1);


                

            ?>
      </form>
    </div>


</pre>
</body>
</html>
<!---->
<!-- Comentário -->

