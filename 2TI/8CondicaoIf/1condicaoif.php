<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Forms Integration</title>
    <link rel="shortcut icon" href="imagens/logo1.ico" type="x-icon">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php

    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $idade = date("Y") - $ano;
    echo "Você nasceu em: $ano e tem $idade anos de idade";


    print("</br>" . date("D: d/m/Y ") . "<br/>");
    /*
        if ($idade >= 18 && $idade < 70) {
            echo("</br>Você já pode Votar e pode dirigir");
        } elseif ($idade >= 16 && $idade < 18) {
            echo "</br>Você possui a opção de votar, mas não de dirigir";
        } elseif ($idade >= 70) {
            echo "</br>Você possui a opção de votar e pode dirigir";
        } else {
            echo "</br>Você é menor de idade, não pode votar e não pode dirigir <br/>";
        }
    */
    switch ($idade) {
        case ($idade >= 18 && $idade < 70):
            echo("</br>Você já pode votar e pode dirigir");
            break;
        case ($idade >= 16 and $idade < 18):
            echo("</br>Você possui a opção de votar, mas não de dirigir");
            break;
        case($idade >= 70):
            echo("</br>Você possui a opção de votar e pode dirigir");
            break;
        default:
            echo "<br/>Você é menor de idade, não pode votar e não pode dirigir <br/>";
    }

    ?>
    <br/>
    <a href="1condicaoif.html" onclick="window.history.go(-1); return false;"> voltar </a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->