<!--Neste programa já é permitido inserir valores através da url da internet
após o endereço é necessário inserir ? para separar o endereço do programa
e no final os valores nomeados a=8
exemplo
http://127.0.0.1/projetos/3operadores_aritmeticos/funcoes_aritmeticas.php?x=9&y=10&z=20
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <title>Funções Artiméticas</title>
    <style>
    h2{
        font: 20pt "Arial Black";
        color: #d73e3e;
    }
    </style>
</head>
<body>
<div>

<?php
/*x = 9 y = 8 z = 2*/
echo  "<h1>Funções Aritméticas</h1><br>";
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    $v3 = $_GET["z"];
echo "<h2>Valores recebidos $v1 e $v2 </h2><br>";
echo "Valor absoluto de $v2 e ".abs($v2)."<br>";
echo "Valor Potenciação de $v1 <sup>$v3</sup>  é: ".pow($v1,$v3)."<br>";
echo "<br>Valor da Raiz quadradada de $v1 é: ".sqrt($v1);
echo "<br>Valor arredondado de $v1 é: ".round($v1);//ceil p arrendodar sempre para cima e o floor arredonda p baixo
echo "<br>Valor intval pegar parte inteira de um número real de $v1 é: ".intval($v1);
echo "<br>Valor formatado de $v1 é R$: ".number_format($v1,2,",",".");


?>
</div>
</body>
</html>

<!---->
<!-- Comentário -->

