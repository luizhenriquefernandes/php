<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Forms Integration</title>
    <link rel="shortcut icon" href="imagens/logo3.ico" type="x-icon">
    <link rel = "stylesheet" href="_css/estilo.css">

</head>
<body>
<div>
<?php
/*
 * O PHP Isset é um função nativa do  PHP que  serve para  saber se uma
 * variável está definida. Ela basicamente verifica a existência de uma
 * variável, e assim, retorna um valor booleano  (true se for verdadeiro,
 * e false se for falso).
 * */
$numero = isset($_GET["n"])?$_GET["n"]:0;
$op = isset($_GET["operacao"])?$_GET["operacao"]:1;
switch ($op){
    case 1:
        $r = $numero * 2;
        break;
    case 2:
        $r = pow($numero,3);
        break;
    case 3:
        $r = pow($numero,1/2);// sqrt($numero);
    break;
    default:
        echo("Opção Inválida");
}
echo "O resultado foi <span class = 'foco'>$r</span><br/><br/>";
?>
    <a href = "1botoesderadio.html" class = "botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

