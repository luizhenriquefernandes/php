<?php
/* AULA: FUNÇÕES PARA STRING
 *
 * */
/*
 *1.printf é um tipo de print formatado igual print(f'{}') no python
 * %d valor decimal positivo ou negativo
 * %u valor decimal sem sinal (apenas positivos)
 * %f valor real para float
 * %s string
 */

function preco ($a,$b){
    printf ("O produto: %s está custando R$ %.2f",$a,$b);
}
/*
 *2.print_r é um tipo de print que serve para mostrar vetor ele dá a posição e o valor da posição
 * É IDEAL PARA TESTES MAS NÃO É UMA VISUALIZAÇÃO BONITA
 * 0 => 1 significa que na posição 0 está 1
 * teste com var_dump e var_export
 * var_dump mostra a quantidade nas chaves a posição o tipo e o valor ex. array(1){[0]=>int(2)}
 * var_export mostra a posição e o valor ex. (0=>2, 1=>4)
 */
function vet($x){// IDADE
    $x[0] = 2;
    $x[1] = 4;
    $x[2] = 8;
    print_r($x);
    print("<br>");
    var_dump($x);
    print("<br>");
    var_export($x);
    print("<br>");
  }



function palavra($a){

    echo($a);
}
function subtracao($a,$b){
    return ($a-$b);
}
function multiplicacao ($a,$b){
    return ($a*$b);
}
function divisao ($a,$b){
    return ($a/$b);
 }
 function cabecalho ()
 {
     echo('<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Função Soma</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>');
 }
 function media($a,$b,$c,$d){
    return ($a + $b + $c + $d)/4;

 }
?>

