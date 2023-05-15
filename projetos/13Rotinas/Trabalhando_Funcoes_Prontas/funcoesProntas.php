<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções Prontas</title>
    <link rel="shortcut icon" href="imagens/logo.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
<div>
    <?php
    //função printf
    printf("<p>Função printf veio do c e permite tratar strings </br></p>");
    $produto = "Kit Kat";
    $preco = 4.5;
    printf("<br/>O %s custa R$ %.2f", $produto, $preco);
    echo("<p><br/>Função printr mostra valores dentro de um vetor útil para testes</p>");
    $x[0] = 1;
    $x[1] = 9;
    $x[2] = 13;
    echo "<br/> Vetor x<br/>";
    print_r($x);
    echo "<br/> Vetor y<br/>";
    $y = array(5, 9, 8, 7, 9, 10);
    print_r($y);
    echo "<br/>";
    echo "<br/> var_dump<br/>";
    var_dump($x);
    echo "<br/> var_export<br/>";
    var_export($x);
    echo "<br/> wordwrap<br/>";
    $txt = "As células procariontes são células sem membrana nuclear, contudo possui o DNA disperso no seu citoplasma ocorrendo o dogma central";
    $res = wordwrap($txt, 40, "<br/>\n");//O \n faz quebrar o código também no explorador de código
    echo($res);
    echo "<br/> strlen calcula o tambanho de uma string<br/>";
    $nome = "   Luiz Henrique de Almeida Fernandes   ";
    $tamanhoNome = strlen($nome);
    echo "Nome = $nome Tamanho = $tamanhoNome<br>";
    echo "<br/> trim remove espaços em branco antes e depois<br/>";
    $tirarEspaços = trim($nome);
    $tamanhoTirar = strlen($tirarEspaços);
    echo("Nome = $nome e Trim = $tirarEspaços Tamanho = $tamanhoTirar<br>");
    echo "<br/> strwordcount conta as palavras dentro de uma string<br/>";
    $frase = "biologia significa estudo da vida";
    $cont = str_word_count($frase, 0);
    echo "$frase e possui $cont palavras<br>";
    $cont = str_word_count($frase, 1);
    print_r($cont);
    echo "<br> Função explode procura um espaço na string e explode separa em vetor<br> ";
    $curso = "Meu curso de PHP";
    $vetor = explode(" ", $curso);
    echo("$curso<br>");
    print_r($vetor);
    echo "<br> Função string split coloca cada caractere em um vetor<br> ";
    $nome = "Motoperpetuo";
    $vetor = str_split($nome);
    echo "palavra: $nome <br>";
    echo "<br> Função implode separa o vetor<br> ";

    print_r($vetor);
    $vetor1[0] = "Gregor";
    $vetor1[1] = "Pai";
    $vetor1[2] = "Genética";
    $implodeVetor = implode($vetor1);
    echo($implodeVetor);
    echo "<br> string to lower diminui a letra<br> ";
    $nome = "LUIZ HENRIQUE";
    print("Seu nome é: " . strtolower($nome));
    echo "<br> string to upper almenta a letra<br> ";
    $nome = "kakashy é f...eroz";
    print("Seu nome é: " . strtoupper($nome));
    echo "<br> ucfirts deixa a primeira letra em maiúscula<br> ";
    $nome = "boku no hErO é f...eroz";
    print("Anime: " . ucfirst($nome));
    echo "<br> ucfirts deixa a primeira letra em maiúscula e para deixar todas as letras minúsculas<br> ";
    $nome = "SHINGUEKI NO BAHAMUTO NAO ASSISTAM";
    print("Anime: " . ucfirst(strtolower($nome)));
    echo "<br> ucwords deixa as primeiras letras maiúsculas<br> ";
    $nome = "boku no hero é f...eroz";
    print("Anime: " . ucwords($nome));
    echo "<br> str reverse mostra de traz para frente<br> ";
    $nome = "boku no hero e f...eroz";
    print("Anime: " . strrev($nome));
    echo "<br> str pos mostra a posição da palavra<br> ";
    $nome = "Celula Procarionte";
    $posNome = strpos($nome, "Procarionte");
    print("A palavra foi encontrada da posição: " . $posNome);
    echo "<br> stripos mostra a posição da palavra ignora se é maiúsculo ou minúsculo<br> ";//i vem de ignore
    $nome = "Celula PROCARIONTE";
    $posNome = stripos($nome, "Procarionte");
    print("A palavra foi encontrada da posição: " . $posNome);
    echo "<br> substr_count mostra a posição da palavra ignora se é maiúsculo ou minúsculo<br> ";
    $nome = "O dogma central do DNA é replicaçao, transcrição e tradução, o DNA são ácidos nucleicos";
    $cont = substr_count($nome, "DNA");
    echo "<br> $nome<br> ";
    print("A palavra DNA foi encontrada da $cont vezes");
    echo "<br> substr possui vários parâmetros: <br> ";
    $nome = "luiz henrique the best teacher";
    $subNome = substr($nome, 0, 8);
    print("Exibe a fatia de interesse ex.: 0,8 " . $subNome);
    echo "<br> substr possui vários parâmetros: <br> ";
    $nome = "luiz henrique the best teacher";
    $subNome = substr($nome, 8);
    print("Exibe a fatia da posição interesse ex.: 8 " . $subNome);
    echo "<br> strpad alinha a esquerda, centro e a direita: <br> ";
    $nome = "luiz the best";
    $subNome = str_pad($nome, 30, "*", STR_PAD_RIGHT);
    print("<br>Meu professor $subNome é maravilhoso <br>");
    $subNome = str_pad($nome, 30, "*", STR_PAD_BOTH);
    print("<br>Meu professor $subNome é maravilhoso <br>");
    $subNome = str_pad($nome, 30, "*", STR_PAD_LEFT);
    print("<br>Meu professor $subNome é maravilhoso <br>");
    echo "<br> str_reapeat repete o número de vezes da varável <br> ";
    $nome = "Ela";
    print("O nome é: " . str_repeat($nome, 5) . "<br>");
    print(str_repeat("-", 20));
    echo "<br> str_replace substitui varável da pra usar o ignore str_ireplace<br> ";
    $frase = "A biologia é maravilhosa";
    $newFrase = str_replace("biologia", "tecnologia da informação", "$frase");
    echo "<br> $frase <br> ";
    print("$newFrase");
    $items = 2;
    ?>
</div>

</body>
</html>
<!---->
<!-- Comentário -->

