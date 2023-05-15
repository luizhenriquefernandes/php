<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Função Soma</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        include "1funcoesString.php";

        //pode utilizar o comando require "funcoes.php"; a diferença é que o require
        //exige que o arquivo escolhido seja lido e não deixa o programa rodar
        //require_once
        //include_once carregam o programa uma única vez independente de quantas vezes queira incluir
        //essas funções no php.
        echo("<h1>Testando novas funções</h1>");
        $prod = isset($_GET["produto"])?$_GET["produto"]:0;
        $preco = isset($_GET["preco"])?$_GET["preco"]:0;
        preco("$prod",$preco);
        echo("<br>");
        /*VETOR
         * CHAMANDO UM VETOR
         * */
        $a = array();
        vet($a);
    echo("<br>");
    /*
     *3.wordwrap cria quebra de linhas ou divisões em uma string em um tamanho especificado
     * Faz quebra direta no texto se colocar um \n no break ele também quebra a linha no código fonte
     * o false gera uma quebra por palavra, se inserir false ele contará e quebrará por palavra
     * se for true ele quebrará a cada palavra no meio dela inclusive se for true
        $b = wordwrap($palavra,80,"<br/>\n",false);
        $b = wordwrap($palavra,80,"<br/>\n",true);
  */

    $palavra = isset($_GET["palavra"])?$_GET["palavra"]:0;
    $b = wordwrap($palavra,80,"<br/>\n");
    echo($b."<br/>");
    /*
     *4.stringlen conta o tamanho da string
  */
    $tamanho = strlen($palavra);
    echo("Tamanho: ".$tamanho." letras <br>");

    /*
     *5.trim retira os espaços das palavras
  */
    $nome = isset($_GET["nome"])?$_GET["nome"]:0;
    $novo = trim($nome);
    echo($novo."<br>");
    /*
     *5.str_word_count conta a quantidade de palavras de uma variável
     * ao se colocar 0 ele conta palavras e ao se colocar 1 ele cria vetores
     * ao se colocar o 2 ele cria um vetor mantendo o posicionamento de cada string no vetor
  */
    $cont = str_word_count($novo,0);
    echo("Palavras contadas".$cont."<br>");
    $cont = str_word_count($novo,1);
    print_r($cont);
    echo("<br>");
    $cont = str_word_count($novo,2);
    print_r($cont);
    echo("<br>");
    /*
         *6.explode explode palavras dentrode um vetor ele procura um valor no caso um espaço em branco
     * em seguida ele é quebrado em um vetor.
    */
    $vetor = explode(" ",$nome);
    print_r($vetor);
    echo("<br>");
    /*
    *7 stringsplit cada palavra é inserida em um índice
    */
    $vetor = str_split($nome);
    print_r($vetor);
    echo("<br>");
    /*
    *8 FUNÇÃO IMPLODE TRANSFORMA UM VETOR EM UMA VARIÁVEL
     * FUNÇÃO JOIN FAZ A MESMA COISA
    */
    $vetor1[0]="MEU";
    $vetor1[1]="DEUS";
    $vetor1[2]="DO";
    $vetor1[3]="CEU";
    $junta = implode(" ",$vetor1);
   print($junta);
   echo("<br>");
    /*
     *9 FUNÇÃO CHR mostra que letra está no código
     */
    $letra = chr(67);
    print("código chr: $letra <br>");
    /*
    *10 FUNÇÃO port mostra qual é o código da letra
    */
    $letra = "t";
    $cod = ord("$letra");
    print("O código da letra $letra é: $cod <br>");




        ?>
        <br>
        <br>
        <a href = "3funcoesString_formulario.php" class = "botao"> Voltar</a>
    </div>
</body>
</html>
<!---->
<!-- Comentário -->

