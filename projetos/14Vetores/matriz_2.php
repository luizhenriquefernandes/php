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
    <pre>
        <table border = "1"><tr>
        <!--Inserindo tabela e mostrar como vetor

        <table =border = "1"><tr>
        faz vetor ser exibido como se fosse tabela.
        </table>
        -->

    <?php
    /*
     * Vetores
     * Importante que para declarar um vetor devemos usar essa sintaxe
     * $variavel = array(10,20,30)
     * Esse programa criará uma lista a partir de caixas de texto utilizando dois formulários php
     * Quando quizer inserir uma posição a mais no vetor se utiliza []
     * vetor = array(5,3,8,2,1);
     * vetor [] = 7;
     * fica vetor(5,3,8,2,1,7)
     * FOREACH => SIGNIFICA PARA CADA
     *
     * */
        $b = array ([$_POST["a1"],$_POST["a2"],$_POST["a3"]]);

        print_r($b);
        echo("<br>");

       $c = range(5,20,5);
       foreach ($c as $v){
           echo("<td>$v ");
       }

       /*Utilizando foeach significa para cada
       para desalocar o vetor  necessário usar o comando unset
       no caso se der unset no índice 0 o valor 5 será deletado
        * */
    $d = array( 0=>5,
                1=> 6,
                3=>8,
                4=>10);
    unset($d[0]);
    print_r($d);

    ?>
            </table>
        <?php
        /*CHAVES ASSOCIATIVAS no php os vetores são variáveis compostas
        heterogênias, ou seja podem receber valores strings, int boolean, etc.

         * */
        $e = array( "nome" => "Ana Laura",
                    "idade" => 6,
                    "altura" => 1.10);
        print_r($e);
        /*PARA INCLUIR um índice
         * */
        $e ["masc"] = true;
        print_r($e);

        foreach ($e as $campo => $valor) {
            echo("O valor de $campo é $valor <br>");
        }
        /*MATRIZES SÃO VETORES DENTRO DE VETORES
         *
         * */
        $f = array(
                    array(2,3),
                    array(4,8),
                    array(5,6));
        print_r($f);


        /* REFERENCIANDO VALORES
         * PARA COLOCAR O VALOR DA LINHA 1 NA LINHA 2
         * a linha 2 no vetor 0 passa a valer 8
         * */
        $f[2][0] = $f [1][1];
        print_r($f);
        var_dump($f);
        #para mostrar o tamanho do vetor
        $g = array( "A",
                    "B",
                    "C",
                    "D");
        echo("O vetor tem ".count($g)." elementos");
        print_r($g);
        /*gerenciamento de estrutura de dados
         * utilizar a função array_push($var,7);
         * é uma função específica para tratamento de dados
         *tipo append em python
         * array_pop($var);
         * Elimina o último elemento do vetor
         * são ideais para trabalhar com pilhas first in first out
         *
         * */
        array_push($g,"F");
        print_r($g);
        array_pop($g);
        print_r($g);
        /*PARA TRABALHAR OS ELEMENTOS DO INICIO DO VETOR
         * array_unshift($var,7);
         * Insere elementos no início do vetor
         * array_shift($var);
         * elimina o valor do início do vetor
         * */
        array_unshift($g,"Z");
        print_r($g);
        array_shift($g);
        print_r($g);
        /*PARA COLOCAR UM VETOR EM ORDEM
         * usar o método sort
         * para usar a forma reversa
         * rsort
         * para fazer um ordenamento assossiativo
         * ou seja os índices ficam atrelados ao vetor
         * basta usar a função asort
         * arsort ordena assossiativa reversamente
         * ordenamento dos índices key
         * usar a função Ksort e os índices serão arrumados
         * para usar um ordenamento reverso de keys
         * utilizar a função krsort;
         * */
        $h = array( 5,8,2,7);
        print_r($h);
        sort($h);
        print_r($h);
        rsort($h);
        print_r($h);
        $h = array (0,8,9,7,2);
        asort($h);
        print_r($h);
        arsort($h);
        print_r($h);
        $h = array( 5=>8,
                    7=>3,
                    0=>4,
                    1=>"luiz");
        ksort($h);
        print_r($h);
        krsort($h);
        print_r($h);





        ?>
        <?php
        function f($v, $n) {
            if ($n <= 0) return 1;
            else
                return $v[$n-1] * f($v, $n-2) + 1;
        }
        $a = array(0,1,2,3);
        print (f($a, 4));
        $a=10;
        $b=2;
        $j=$a/2;
        for ($i=0;$i<$j;$i++){
            if ($i % $b == 1)
                echo "$i";
        }
        $a = 5;
        $b = 3;
        $c = ($a>$b)?true:false;
        print $c;
        ?>

    <br/>
    <a href="javascript: history.go(-1)" class="botao"> Voltar</a>
    </pre>
</div>

</body>
</html>
<!---->
<!-- Comentário -->

