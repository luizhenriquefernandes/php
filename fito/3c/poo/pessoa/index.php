<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "./classe/Pessoa.php";
        $objetoPessoa = new Pessoa();
        $objetoPessoa->setNome("Paulo Paulada");
        $objetoPessoa->setIdade(37);
        $objetoPessoa->apresentar();    
    ?>
</body>
</html>