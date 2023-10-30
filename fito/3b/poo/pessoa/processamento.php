<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "./Classe/Pessoa.php";
        $nome = $_GET['txtNome'];
        $dataNas = $_GET['dataNasc'];
        $objetoPessoa = new Pessoa($nome,$dataNas);
        $objetoPessoa->idade($dataNas,);
        $objetoPessoa->apresentar();
    ?>
</body>
</html>