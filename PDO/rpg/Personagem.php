<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Personagem</title>
</head>

<body>
   
        <div class="p">
            <input type="submit" value="Mãos Flamejantes" name="btnMagia">
            <input type="submit" value="Status" name="btnStatus">
            <?php
            require_once "Pessoa.php";
            require_once "Mago.php";

            $mago = new Mago(
                isset($_POST['nome']) ? $_POST['nome'] : null,
                isset($_POST['raca']) ? $_POST['raca'] : null,
                isset($_POST['profissao']) ? $_POST['profissao'] : null,
                isset($_POST['constituicao']) ? $_POST['constituicao'] : 0,
                isset($_POST['destreza']) ? $_POST['destreza'] : 0,
                isset($_POST['forca']) ? $_POST['forca'] : 0,
                isset($_POST['inteligencia']) ? $_POST['inteligencia'] : 0,
                isset($_POST['sabedoria']) ? $_POST['sabedoria'] : 0,
                isset($_POST['carisma']) ? $_POST['carisma'] : 0,
                isset($_POST['arma']) ? $_POST['arma'] : null,
                isset($_POST['categoria']) ? $_POST['categoria'] : 0,
                isset($_POST['vida']) ? $_POST['vida'] : 0,
                isset($_POST['magiaDia']) ? $_POST['magiaDia'] : 0

            );
            $mago->statusAtual();
            $mago->maosFlamejantes();           
            // $mago->maosFlamejantes();
            // if (isset($_POST['btnMagia'])) {
            //     $mago->maosFlamejantes();
            // } else if (isset($_POST['btnStatus'])) {
            //     $mago->statusAtual();
            // }
            ?>
   
</body>

</html>