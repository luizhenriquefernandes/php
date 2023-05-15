<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vetores</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
<div>

    <?php
    /*
     * Vetores
     * Importante que para declarar um vetor devemos usar essa sintaxe
     * $variavel = array(10,20,30)
     * Esse programa criará uma lista a partir de caixas de texto utilizando dois formulários php
     * */
        $b = array ([$_POST["a1"],$_POST["a2"],$_POST["a3"]]);

        print_r($b);
        echo("<br>");

        $arrayExemplo = array (
                "Gabriel" => "Walter",
            "Walter" => "Gabriel",
        );
        var_dump($arrayExemplo);
        echo("<br>");
        $arrayConvercao = array(
                1 => "a",
            "1" => "b",
            1.5 => "c",
            true => "d",
        );
        var_dump($arrayConvercao);

        echo("<br>");
        $arrayMista = array (
                "foo" => "barr",
            "barr" => "foo",
            100 => 100,
            -100 => 100,
        );
        var_dump($arrayMista);
    echo("<br>");
    $arraySemIncremento = array(
            "Walter",
        "Lucas",
        "Vinicius",
        700,
        800,
    );
    var_dump($arraySemIncremento);
    echo("<br>");
    $arrayEscolhaIndice = array(
            "Lucas",
            "Vinicius",
            8 => "Leopoldo",
            "Anastacia",
            "Charles D. Darwing",
    );
    var_dump($arrayEscolhaIndice);
    echo("<br>");
    $arrayAcessandoElementos = array(
            "foo" => "baar",
        42 => 24,
        "multi"=>array(
                "dimensional" => array(
                "espaco"=>"estrela",
                    "indice1"=>"brilho"
                )
        )
    );
    var_dump($arrayAcessandoElementos["foo"]);
    echo("<br>");
    var_dump($arrayAcessandoElementos[42]);
    echo("<br>");
    var_dump($arrayAcessandoElementos["multi"]["dimensional"]["indice1"]);
    echo("<br>");
    var_dump($arrayAcessandoElementos["multi"]["dimensional"]["espaco"]);
    echo("<br>");
    // var_dump imprime o indice typo tamanho e o que contém.
    function getArray(){

        return  array(1,2,3);
    }
    $arrayNormal = array(
            1 , 2, 3, 4, 5, 6
    );
    print_r($arrayNormal);
    foreach ($arrayNormal as $i => $value){
        unset($arrayNormal[$i]);

    }
    print_r($arrayNormal);

       echo("<br>");
    //acrescentando valores
     $arrayNormal[] = 6;
     print_r($arrayNormal);
     echo("<br>");
     //Reindexar
    $arrayNormal = array_values($arrayNormal);
    $arrayNormal[]=7;
    print_r($arrayNormal);
    //ver funções uteis





    ?>
    <br/>
    <a href="javascript: history.go(-1)" class="botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

