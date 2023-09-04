<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>
    <?php 
        require_once "./php/Pessoa.php";
        require_once "./php/PessoaBebe.php";
        $objetoPessoa = new Pessoa ("Luiz","m","25/05/2015");
        $objetoPessoa->andar();
        $objetoPessoa->comendo();
        $objetoPessoa1 = new PessoaBebe("Gabriel","M","30/02/2021");
        print_r($objetoPessoa1);
        print("<br>");
        $objetoPessoa1 -> andar();
        $objetoPessoa1 -> comendo();
        $objetoPessoa1 ->chorando();
    ?>
</body>
</html>