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
    <form>

        <?php

        /*require_once é uma função que importa a Classe Planta.php*/
        require_once'Planta.php';
        require_once 'PlantaConstructComplexo.php';

      $p1 = new Planta();
      $p1->setTipo("Hibísco");
      $p1->setOvario("Súpero");
      print("O Tipo é: ".$p1->getTipo()."<br>");

      print("O ovário é: ".$p1->getOvario()."<br>");
        //fazendo por interpolação com chaves
        print("O tipo da planta é: {$p1->getTipo()} e o tipo de ovário é {$p1->getOvario()}<br>");
        print_r($p1);
        print("<br>Printando p2 com o construct como padrão<br>");
        //criando outro objeto padrão
        $p2 = new Planta();
        //Ultimo exemplo

        print_r($p2);
        print("<br>Último exemplo:<br>
                Através de uma nova classe e um constructor 
                mais complexo, em que é necessário inserir os elementos dentro objeto quando invocado<br>");
        $p3 = new PlantaConstructComplexo("Tuberosa","Súpero",0.75);
        print_r($p3);
        ?>

        </br><input type = "submit" class = "botao" value = "Enviar"/>
    </form>


</div>
</body>
</html>
 