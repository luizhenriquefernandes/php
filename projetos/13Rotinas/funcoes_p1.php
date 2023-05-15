<div>
<?php
    include "funcoes.php";
    cabecalho();
    //pode utilizar o comando require "funcoes.php"; a diferença é que o require
    //exige que o arquivo escolhido seja lido e não deixa o programa rodar
    //require_once
    //include_once carregam o programa uma única vez independente de quantas vezes queira incluir
    //essas funções no php.
    echo("<h1>Testando novas funções</h1>");
    ola();//nome ();
    valor(4); //idade();
$i = 1;
$a = $b = $c = $d = 0;
$maior = $menor = $media = 0;

while ($i <= 4) {
    //cria variavel $v e insere num1
    $v = "num".$i;
    //cria variável $url e insere o valor de v1
    $url = "v".$i;
    //variável da variável $v que já é num vai pegar o valor de v1 na variável url
    $$v = isset($_GET[$url]) ? $_GET[$url] : 0;

    $i++;

}
//mostrar os valores gerados nas caixas de textos
$i = 1;
while ($i <= 4){
    $v = "num".$i;
    echo("Valor $i: ".$$v."<br/>");
    if ($$v == 1){
        $a = $$v;
    }elseif ($$v ==2){
        $b = $$v;
    }elseif ($$v ==3){
        $c = $$v;
    }
    elseif ($$v ==4){
        $d = $$v;
    }
    $r = soma ($a,$b);
    echo("Valor: $r<br>");
    $i++;


}




    ?>
    <a href = "funcioes_formulario.php" class = "botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

