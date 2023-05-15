<?php
// CRIAR FUNÇÃO NOME DO ALUNO
function ola (){
    echo ("<h1>Hellow World</h1>");//NOME COMPLETO
}
function valor($v){// IDADE
    echo("<h2>O valor é $v</h2>");
    echo("<h2>Finalizando o Programa</h2>");
  }
function soma($a,$b){
    return($a + $b);
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

