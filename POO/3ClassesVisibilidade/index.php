<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/style3.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP POO - Prof. Luiz henrique</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
</head>
<body>
<div>

        <?php
        /*require_once é uma função que importa a Classe Caneta.php*/
       require_once "Caneta.php";
       /*É necessário fazer
       $caneta1 = new Caneta(); neste caso se cria o objeto caneta
       para atribuir os atributos ao objeto caneta1 é necessário usar a seta ->
       */
       $c1 = new Caneta();
       $c1->modelo="Bic Cristal";
       $c1->cor = "azul";
       //testar todos os elementos
       //$c1->ponta = 0.5; ele não deixa mexer pq é privado só pde mexer dentro da classe
       //após o teste mudar tampar e destampar para público;
        $c1->destampar();
        $c1->escrever();
        $c1->tampar();
        $c1->desenhar();



       print_r($c1);
        ?>

        </br><input type = "submit" class = "botao" value = "Enviar"/>
    </form>


</div>
</body>
</html>
 