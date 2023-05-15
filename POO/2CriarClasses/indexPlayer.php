<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/style.css"/>
    <meta charset="UTF-8"/>
    <lang = "pt-BR">
    <title>Curso de PHP POO - Prof. Luiz henrique</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
<pre>
<div>

        <?php
        /*require_once é uma função que importa a Classe Caneta.php*/
       require_once "Player.php";
       /*criar o objeto player1
       */
       $player1 = new Player();
       $player1 -> classe = "Druida";
       $player1 -> raca = "Elfo";
       $player1 -> altura = 1.65;

       print_r($player1);
       /*Mostrando status atual da caneta
       var_dump serve para vetores e objetos
       */

        ?>

        </br><input type = "submit" class = "botao" value = "Enviar"/>
    </form>


</div>
    </pre>
</body>
</html>
 