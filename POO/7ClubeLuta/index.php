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
                require_once 'Combate.php';

                $p = array();
                $p[0] = new Player("Eufor",200,"Elfo da Lua",1.70,
                                68,3,2,0);
                $p[1] = new Player("Meliodas",45,"Deadly",
                                    1.78,65,10,1,2);
                $p[2] = new Player("Seya",32,"japonesa",
                1.78,75,100,0,0);
                $p[3] = new Player("Shanks",300,"Dracar",
                3.01,275,30,8,2);
                $p[4] = new Player("Tobias",16,"Brasileira",
                1.85,85,0,14,0);
                $p[5] = new Player("Foregin",1300,"Elfican",
                1.65,72,14,2,3);
                $p[6] = new Player("Bel",3000,"condado",
                0.65,45,314,102,40);
                $rodada = new Combate();
                $rodada ->marcarCombate($p[0],$p[1]);
                $rodada ->lutar();
                $p[0]->status();
                $p[1]->status();








            ?>
      </form>
    </div>


</pre>
</body>
</html>
<!---->
<!-- Comentário -->

