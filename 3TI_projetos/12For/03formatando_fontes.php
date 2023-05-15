<!DOCTYPE html>
<!--O nome do arquivo deve ser o mesmo nome do arquivo html-->
<html lang="pt-br">
<head>
    <?php
    $txt = isset($_GET["t"])?$_GET["t"]:"texto padrão";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <title>Forms Integration</title>
    <link rel="shortcut icon" href="imagens/logo1.ico" type="x-icon">
    <link rel = "stylesheet" href="_css/estilo.css">
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
<?php
echo"<span class = 'texto'>$txt</span>";
?>
    <a href="3_formulario_formatandofontes.html"></br>Voltar</a>
</div>
</body>
</html>
<!---->
<!-- Comentário -->

