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
<div>

        <?php
        /*require_once é uma função que importa a Classe Caneta.php*/
       require_once "Caneta.php";
       /*É necessário fazer
       $caneta1 = new Caneta(); neste caso se cria o objeto caneta
       para atribuir os atributos ao objeto caneta1 é necessário usar a seta ->
       */
       $caneta1 = new Caneta();
       $caneta1->modelo="Esferográfica";
       $caneta1->cor = "Azul";
       $caneta1->ponta = 0.5;
       $caneta1->tampada = true;
       $caneta1->carga = 100;
       /*Mostrando status atual da caneta
       var_dump serve para vetores e objetos
       */
        var_dump($caneta1);
        print("<br>");
        print_r($caneta1);
        print("<br>");
        $caneta1->destampar();
        $caneta1->rabiscar();
        $caneta1->tampar();
        print("<br>");
        print_r($caneta1);
        ?>

        </br><input type = "submit" class = "botao" value = "Enviar"/>
    </form>


</div>
</body>
</html>
 