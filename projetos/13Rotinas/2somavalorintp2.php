<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
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
    $n = 0;
    $tot = 0;
    function soma()
    {
        $p = func_get_args();
        $t = func_num_args();
        $s = 0;
        for ($i = 0; $i < $t; $i++) {
            $s = $s + $p[$i];
        }
        return $s;
    }

    for ($i = 1; $i <= 2; $i++) {
        $v = "num" . $i;
        $url = "v" . $i;
        $$v = isset($_GET["$url"]) ? $_GET["$url"] : 0;
        $w[$n] = $$v;
        $n++;
    }
    for ($i = 1; $i <= 2; $i++) {
        $v = "num" . $i;
        echo "</br><a style='font-size: larger;color: red;font-family: Arial Black'>valor $i: </a>" . $$v ."<br/>";

        //echo("valor $i: " . $$v . "<br/");}
    }
    echo("<br/>");
    echo("A soma é por get <br/>");
    $x = $_GET["v1"];
    $y = $_GET["v2"];
    $x = soma($x, $y);
    echo("A soma é por get $x<br/>");
    echo("Soma por vetor<br/>");
    $zw = soma($w[0], $w[1]);
    echo("A soma por vetor é: $x<br/>");
    echo("Soma por foreach (var as key => value){}<br/>");
    foreach ($w as $key => $value) {
        $tot += soma($value);
        echo("A posição [$key] => valor $value <br/>");

        //echo("valor de w: $w<br/>");
    }
    echo("Soma por foreach total sendo acumulador = $tot")
    ?>
    <br/>
    <br/>
    <a href="javascript: history.go(-1)" class="botao"> Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

